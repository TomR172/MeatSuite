<?php

class Page
{

    protected $name;
    protected $label;
    protected $showInMenu;
    protected $showPageHeader;

    public function __construct($name, $options = array())
    {
        $this->name = $name;

        foreach($options as $option => $value) {
            $this->$option = $value;
        }

        if(!isset($options['showPageHeader'])) {
            $this->showPageHeader = true;
        }
        if(!isset($options['showInMenu'])) {
            $this->showInMenu = true;
        }
    }

    public function getLabel()
    {
        if($this->label == "Profile") {
            $desc = Database::query("SELECT * FROM farms WHERE id='" . Security::sanitizeForDatabase($_GET['id']) . "'");
            $row = mysql_fetch_array($desc);
            return $row['FarmName'];
        } else if(isset($this->label)) {
            return $this->label;
        } else {
            return ucfirst($this->name);
        }
    }

    public function getName()
    {
        return $this->name;
    }

    public function getIsCurrentPage()
    {
        return $this == Routing::$currentPage;
    }

    public function getFileName()
    {
        return "php/views/pages/" . $this->name . ".php";
    }

    public function getShowInMenu()
    {
        return $this->showInMenu;
    }

    public function getShowPageHeader()
    {
        return $this->showPageHeader;
    }

}