<?php

class Routing
{
    static public $pages;
    
    static public $currentPage;
    
    static public function initalize()
    {
        self::$pages = array(
            'home' => new Page('home', array('showPageHeader' => false)),
            'about' => new Page('about'),
            'farms' => new Page('farms'),
            'signup' => new Page('signup', array('label' => 'Sign Up', 'showInMenu' => false)),
            'profile' => new Page('profile', array('showInMenu' => false)),
            'learnMore' => new Page('learnMore', array('label' => 'Learn More')),
            'login' => new Page('login', array('showInMenu' => false)),
            'edit' => new Page('edit', array('showInMenu' => false))
        );
        
        if(isset($_GET["page"]) && isset(self::$pages[$_GET["page"]])) {
            self::$currentPage = self::$pages[$_GET["page"]];
        } else {
            self::$currentPage = self::$pages["home"];
        }
    }
}