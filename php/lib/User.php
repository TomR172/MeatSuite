<?php

class User
{
    static function loggedIn()
    {
        return isset($_SESSION['user']);
    }
}