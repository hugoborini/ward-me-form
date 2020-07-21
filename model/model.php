<?php
function dbConnect() {
    try { $bdd = new PDO('mysql:host=localhost;dbname=ward-me-form;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }
    catch (Exception  $e) {
    die('Error : ' .  $e->getMessage());
    }
    return $bdd;
}


function sendData($name, $lastname ,$age, $location, $sexe, $metier, $is_play ,$play_type, $play_time){
    $bdd = dbConnect();

    $insert = $bdd->prepare("INSERT INTO responce(name , lastname, age, location, sexe, metier, is_play ,play_type, play_time) VALUES(:name, :lastname, :age, :location, :sexe, :metier, :is_play , :play_type, :play_time)");
    $insert->execute([
        "name" => $name,
        "lastname" => $lastname,
        "age" => $age,
        "location" => $location,
        "sexe" => $sexe,
        "metier" => $metier,
        "is_play" => $is_play,
        "play_type" => $play_type,
        "play_time" => $play_time
    ]);

    return $insert;
}