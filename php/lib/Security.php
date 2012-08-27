<?php

class Security
{
    static function sanitizeForFrontend($value)
    {
        if(is_array($value)) {
            $value_array = array();
            foreach($value as $k => $v) {
                $value_array[$k] = self::sanitizeForFrontend($v);
            }
            return $value_array;
        } else {
            if(get_magic_quotes_gpc())
                $value = stripslashes($value);
            $value = htmlspecialchars($value);
            return $value;
        }
    }
    
    static function sanitizeForDatabase($value)
    {
        $link = Database::connectToDB();
        return mysql_real_escape_string($value, $link);
    }

}