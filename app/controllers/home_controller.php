<?php

$arg1 = isset($_GET['url1']) ? htmlspecialchars($_GET['url1']) :null;


if(!isset($arg1) || $arg1 == '' )
    $arg1 = 'home';
switch($arg1){
    case 'home':
        $include = "home";
        break;
    case "login":
        $include = "login_register";
        break;
    case "register":
        $include = "login_register";
        break;
    case "form_log":
        require(FORM_PATH. "form_log.php");
        break;
    case "form_reg":
        require(FORM_PATH. "form_reg.php");
        break;
    case "add":
        session_start();
        if(isset($_SESSION["email"])) $include = "add_article";
        else $include = "home";
        break;
    case "article":
        require("article_controller.php");
        break;
    }

?>