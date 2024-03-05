<?php

try {
    define("HOST", "localhost");
    define("DBNAME", "wooxtravel");
    define("USER", "root");
    define("PASSWORD", "");

    $conn = new PDO("mysql:host=" . HOST . ";dbname=" . DBNAME, USER, PASSWORD);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // if($conn == true){
    //     echo "Conexión exitosa";
    // } else {
    //     echo "Conexión fallida";
    // }
} catch (PDOException $Exception) {
    echo $Exception->getMessage();
}
