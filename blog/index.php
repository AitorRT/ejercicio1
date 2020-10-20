<?php
    /*configuracion entorno
    session_start();
    define('APP', __DIR__);*/

    ini_set('display_errors','On');
    require __DIR__.'/src/connect.php';
    require __DIR__.'/src/schema.php';
    //conexion
    $dbname="BLOGDB";
 
    //$dsn='mysql:host=localhost;dbname='.$dbname.';charset=utf8mb4';
    $base=connectSqlite($dbname);
    //$base=connectSqlite('prova');
    //schema
    if(!isset($base)){
        schemaGenerator($base);
    }
    
    require "views/home.html";
    
?>