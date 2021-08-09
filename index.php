<?php

session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    header("Location: ./files/front-page.php");
} else {
    header("Location: ./files/sign-in.php");
}
