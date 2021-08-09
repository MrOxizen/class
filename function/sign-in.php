<?php
 session_start();
if (isset($_POST)):
    include_once './database.php';

    $user = $_POST['user-name'];
    $pass = md5($_POST['user-psw']);
    $sql = "SELECT * FROM users WHERE name = '$user'";

    $result = $conn->query($sql);
    $acc = mysqli_fetch_assoc($result);
    if (count($acc) == 5):
        if ($acc['psw'] == $pass):
            
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $user;
            header("Location: ../index.php");
        else:
            echo 'jamela';
        endif;
    endif;
endif;

