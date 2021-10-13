<?php
    $servername = 'localhost';
    $username = 'root';
    $password = 'root';            
    //On établit la connexion
    $conn = new PDO("mysql:host=$servername;dbname=bddtest", $username, $password);
?>