<?php

    Require "Connection.php";
    $sql = "INSERT INTO users(username,email,pass)
    VALUES(:username,:email,:pass)";

    $statement = $pdo->prepare($sql);
    $username = 'Waleed Smadi';
    /*$gender = 'Male';*/
    /*$dateofbirth = '2000-02-01';*/
    $email = 'waleedsmadi24@gmail.com';
    $pass = '12345678';
    
    $statement->bindParam(":username",$username,PDO::PARAM_STR);
    /*$statement->bindParam(":gender",$gender,PDO::PARAM_STR);*/
    /*$statement->bindParam(":dateofbirth",$dateofbirth,PDO::PARAM_STR);*/
    $statement->bindParam(":email",$email,PDO::PARAM_STR);
    $statement->bindParam(":pass",$pass,PDO::PARAM_STR);
    
    $statement->execute();

    $pdo = null;

?>