<?php

$arg2 = isset($_GET['url2']) ? htmlspecialchars($_GET['url2']) :header('Location:/home');
$arg3 = isset($_GET['url3']) ? htmlspecialchars($_GET['url3']) :null;


switch($arg3){
    case "home":
        $include = "home";
        break;
    case "login":
        $include = "login_register";
        break;
    case "register":
        $include = "login_register";
        break;
    case "modify":
        if(isset($_SESSION["email"])) $include = "modify";
        else $include = "home";
        break;
    }
switch($arg2){
    case "post_article":
        require(FORM_PATH."form_post_article.php");
        break;
}
?>
