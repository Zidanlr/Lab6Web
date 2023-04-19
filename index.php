<?php

require("class/database.php");
require_once("template/header.php");
require_once("template/sidebar.php");
require_once("class/form.php");



 class Main{
    private $konfig = [];
    public function __construct($namVar)
    {
        $this->konfig=$namVar;
    }
    public function y($main){
        if (array_key_exists($main,$this->konfig)){
            require($this->konfig[$main]);
        }
        else{
            require($this->konfig["home"]);
        }
    }
}

$url=[
    "home"=>"module/home.php",
    "about"=>"module/about.php",
    "contact"=>"module/contact.php",
    "add"=>"module/Artikel/add.php",
    "update"=>"module/Artikel/update.php",
    "hapus"=>"module/Artikel/hapus.php"
];
$istimewa = new main($url);
$istimewa->y(@$_REQUEST["mod"]);
require_once("template/footer.php");