<?php
require "model/model.php";

function sendFormToDb($name, $lastname,$age, $location, $sexe, $metier, $is_play ,$play_type, $play_time) {
    $insert = sendData($name, $lastname,$age, $location, $sexe, $metier, $is_play ,$play_type, $play_time);
    header('Location: /ward-me-form?sucess=1');
    exit;
    return $insert;
}