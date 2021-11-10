<?php
$link= mysqli_connect('localhost', 'root', '1234', '5');
$server="localhost";
$user="root";
$pass="1234";
$db="5";

// connect to mysql

mysqli_connect($server, $user, $pass) or die("Sorry, can't connect to the mysql.");

// select the db

$link->select_db("5") or die("Sorry, can't select the database.");
