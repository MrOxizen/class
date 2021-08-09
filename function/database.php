<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydatabse";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    //Create Database
    $sql = "CREATE DATABASE IF NOT EXISTS $dbname";
    $result = $conn->query($sql);
    $conn = new mysqli($servername, $username, $password, $dbname);
}

$users = "CREATE TABLE IF NOT EXISTS users (
                      id int(11) AUTO_INCREMENT,
                      name varchar(255) NOT NULL,
                      psw varchar(255) NOT NULL,
                      full_name varchar(255) NOT NULL,
                      birth_day varchar(255) NOT NULL,
                      PRIMARY KEY  (id))";


$user_data = "CREATE TABLE IF NOT EXISTS information (
                      id int(11) AUTO_INCREMENT,
                      name varchar(255) NOT NULL,
                      full_name varchar(255) NOT NULL,
                      email varchar(255) NOT NULL,
                      gender varchar(50) NOT NULL,
                      birth_day varchar(255) NOT NULL,
                      mobile_number varchar(255) NOT NULL,
                      fathers_name varchar(255) NOT NULL,
                      mothers_name varchar(255) NOT NULL,
                      district varchar(255) NOT NULL,
                      PRIMARY KEY  (id))";


$result = $conn->query($users);
$result = $conn->query($user_data);

