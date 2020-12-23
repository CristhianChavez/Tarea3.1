<?php
    $ts = "5";
    $publicKey = "51a8298f86eb6e8222df4150c83bb1e4";
    $privateKey = "1428df0400109477e4c8e3f198a7ed2f27643474";
    $hash = md5($ts.$privateKey.$publicKey);

    /*$URI = "http://gateway.marvel.com/v1/public/characters?name=thor&ts=$ts&apikey=$publicKey&hash=$hash";*/
    $URI = "https://apiperu.dev/api/dni/72137263";



    $data = file_get_contents($URI);

/*
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $URI);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, $URI);
    $data = curl_exec($ch);
    curl_close($ch);*/

    var_dump($data)

?>