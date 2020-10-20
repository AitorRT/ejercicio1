<?php

    include "../src/schema.php";
    include "../src/connect.php";

    $dbname="BLOGDB";
    $base = connectSqlite($dbname);
     
    $username = filter_input(INPUT_POST, 'uname');
    $password = filter_input(INPUT_POST, 'psw');

    if(isset($username) and isset($password)){
        insertSchema($base,$username, $password);
        header("location:../views/home.html");
    }
?>