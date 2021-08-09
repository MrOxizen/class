<?php

if (isset($_POST)):
    include_once './database.php';

    $user = $_GET['id'];

    $sql = "DELETE FROM information WHERE id=" . $user;

    if ($conn->query($sql) === TRUE) {
         header("Location: ../files/table.php");
    } else {
        echo "Error deleting record: " . $conn->error;
    }

endif;

