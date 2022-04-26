<?php

function convertDate($date) {
    $date = strtotime($date);
    return date('d/m/Y', $date);
}