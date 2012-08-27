<?php

class Database
{

    /**
     * Sets up connection with database
     * @return mysql link
     */
    static function connectToDB()
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
    static function query($query, $insert_id = false)
    {
        $link = self::connectToDB();
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
    static function insert($table, $values, $echo_query = false)
    {
        $set_expression = self::sqlSetExpression($values);
        $query = 'INSERT INTO ' . $table . ' SET ' . $set_expression;

        if($echo_query)
            echo $query . '<br/>';

        $insert_id = self::query($query, true);

        return $insert_id;
    }

    /**
     * Update record in $table matching $contraints with $values
     * @param string $table - name of table to perform update on
     * @param associative array $values - values to update where keys are field names and values are field values
     * @param string $constraints - WHERE contraints to update on
     * @param boolean $echo_query - default false
     */
    static function update($table, $values, $constraints, $echo_query = false)
    {
        $set_expression = self::sqlSetExpression($values);

        $query = 'UPDATE ' . $table . ' SET ' . $set_expression . ' WHERE ' . $constraints;

        if($echo_query)
            echo $query . '<br/>';

        self::query($query);
    }

    /**
     * Turn $values into a string for a mysql query, and protect from sql injection
     * @param associative array - $values - keys are field names and values are field values
     * @return string - expression for mysql query 
     */
    static function sqlSetExpression($values)
    {
        if(is_array($values)) {
            $set_expression = '';
            foreach($values as $column => $value) {
                if(isset($value))
                    $set_expression .= $column . '="' . Security::sanitizeForDatabase($value) . '", ';
            }

            $set_expression = rtrim($set_expression, ', ');
        } else {
            $set_expression = $values;
        }
        return $set_expression;
    }
}
