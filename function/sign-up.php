<?php

if (isset($_POST)):
    include_once './database.php';

    $user = $_POST['user-name'];
    $pass = md5($_POST['user-psw']);
    $fname = $_POST['full-name'];
    $bday = $_POST['birth-day'];

    $sql = "INSERT INTO users (name, psw, full_name, birth_day)
VALUES ('$user', '$pass', '$fname', '$bday')";

    if ($conn->query($sql) === TRUE) {
        unset($_SESSION['loggedin']);
        unset($_SESSION['username']);
        header("Location: ../index.php");
    } else {
        unset($_SESSION['loggedin']);
        unset($_SESSION['username']);
        header("Location: ../files/sign-up.php");
    }
    
endif;

