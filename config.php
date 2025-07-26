<?php
    error_reporting(0);
    session_start();
    $DB_HOST     =  "localhost";
    $DB_USER     =  "root";
    $DB_PASS     =  "@1234#1234";
    $DB_DATABASE =  "book";
    $connect = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_DATABASE);
    if(!$connect)
    {
        echo "connection Error";
    }
?>