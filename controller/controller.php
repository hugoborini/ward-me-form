<?php
require "model/model.php";

function sendFormToDb($name, $lastname,$age, $location, $sexe, $metier, $is_play ,$play_type, $play_time) {
    $insert = sendData($name, $lastname,$age, $location, $sexe, $metier, $is_play ,$play_type, $play_time);
    header('Location: /ward-me-form?sucess=1');
    exit;
    return $insert;
}

// function checkSendFromToDb($name, $lastname,$age, $location, $sexe, $metier, $is_play ,$play_type, $play_time){
//     if (is_string($name) && is_string($lastname)){
//         sendFormToDb($name, $lastname,$age, $location, $sexe, $metier, $is_play ,$play_type, $play_time);
//     } 
//     else {
//         header("Location: /ward-me-form/idc");
//         exit;
//     }
// }