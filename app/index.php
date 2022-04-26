
<?php

// Require all model files
foreach (glob(__DIR__ . "/../app/model/*.php") as $filename) {
    require_once($filename);
}

// Require all config files
foreach (glob(__DIR__ . "/config/*.php") as $filename) {
    require_once $filename;
}

$include = "error404";
$count = 0;

// Require controller/home_controller.php
require_once __DIR__ . "/../app/controllers/home_controller.php";

// Require view/partial/header.php
//require_once __DIR__ . "/../app/views/partials/header.php";

require(VIEW_PATH."/partials/nav.php");

require(VIEW_PATH.$include.".php");



// Require view/partial/footer.php
//require_once __DIR__ . "/../app/views/partials/footer.php";



