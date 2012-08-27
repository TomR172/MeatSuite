<?php

/**
 * Sets up connection with database
 * @return mysql link
 */
function connect_to_db()
{
    $link = mysql_connect(MYSQL_SERVER, MYSQL_USERNAME, MYSQL_PASSWORD);

    if(!$link) {
        echo "Error: " . mysql_error();
        return false;
    }

    $db = mysql_select_db(MYSQL_DATABASE, $link);
    if(!$db) {
        echo "Error: " . mysql_error();
        return false;
    }

    return $link;
}

/**
 * Perform a query on our database
 * @param string $query
 * @param boolean $insert_id - should the insert id be returned
 * @return mixed - mysql resource if $insert_id is false, int otherwise 
 */
function query($query, $insert_id = false)
{
    $link = connect_to_db();
    $result = mysql_query($query, $link);

    if(!$result) {
        echo "Error: " . mysql_error();
    }
    
    if($insert_id)
        $result = mysql_insert_id();

    mysql_close($link);

    return $result;
}

/**
 * Insert $values into $table
 * @param string $table - name of table to insert into
 * @param associative array $values - values to insert where keys are field names and values are field values
 * @param boolean echo_query - default false
 * @return int - id of inserted record
 */
function insert($table, $values, $echo_query = false)
{
    $set_expression = sql_set_expression($values);
    $query = 'INSERT INTO ' . $table . ' SET ' . $set_expression;

    if($echo_query) echo $query.'<br/>';

    $insert_id = query($query, true);

    return $insert_id;
}

/**
 * Update record in $table matching $contraints with $values
 * @param string $table - name of table to perform update on
 * @param associative array $values - values to update where keys are field names and values are field values
 * @param string $constraints - WHERE contraints to update on
 * @param boolean $echo_query - default false
 */
function update($table, $values, $constraints, $echo_query = false)
{
    $set_expression = sql_set_expression($values);

    $query = 'UPDATE ' . $table . ' SET ' . $set_expression . ' WHERE ' . $constraints;

    if($echo_query) echo $query.'<br/>';

    query($query);
}

/**
 * Turn $values into a string for a mysql query, and protect from sql injection
 * @param associative array - $values - keys are field names and values are field values
 * @return string - expression for mysql query 
 */
function sql_set_expression($values)
{
    if(is_array($values)) {
        $set_expression = '';
        foreach($values as $column => $value) {
            if(isset($value))
                $set_expression .= $column . '="' . db_sanitize($value) . '", ';
        }

        $set_expression = rtrim($set_expression, ', ');
    } else {
        $set_expression = $values;
    }
    return $set_expression;
}

function db_sanitize($value) {
        $link = connect_to_db();
        return mysql_real_escape_string($value, $link);
}

function sanitize($value) {
        if(is_array($value)) {
                $value_array = array();
                foreach($value as $k => $v) {
                        $value_array[$k] = sanitize($v);
                }
                return $value_array;
        } else {
                if(get_magic_quotes_gpc()) $value = stripslashes($value);
                $value = htmlspecialchars($value);
                return $value;
        }
}

function loggedin() {
    return isset($_SESSION['user']);
}
