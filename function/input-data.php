<?php

if (isset($_POST)):
    include_once './database.php';

    $info_id = $_POST['info_id'];
    $username = $_POST['username'];
    $fullname = $_POST['fullname'];
    $useremail = $_POST['useremail'];
    $usergendar = $_POST['usergendar'];
    $userbday = $_POST['userbday'];
    $mobile_number = $_POST['mobile_number'];
    $fathers_name = $_POST['fathers_name'];
    $mothers_name = $_POST['mothers_name'];
    $district = $_POST['district'];
    if ($info_id > 0 && (int) $info_id):
        $sql = "UPDATE informations SET name='$username', full_name='$fullname', email='$useremail', gender='$usergendar', birth_day='$userbday', mobile_number='$mobile_number', fathers_name='$fathers_name', mothers_name='$mothers_name', district='$district' WHERE id=" . $info_id;
    else:
        $sql = "INSERT INTO informations (name, full_name, email, gender, birth_day, mobile_number, fathers_name, mothers_name, district)
VALUES ('$username', '$fullname', '$useremail', '$usergendar', '$userbday', '$mobile_number', '$fathers_name', '$mothers_name', '$district')";
    endif;

    if ($conn->query($sql) === TRUE) {
        header("Location: ../files/table.php");
    } else {
        session_start();
        $_SESSION['info_id'] = $info_id;
        $_SESSION['info_name'] = $username;
        $_SESSION['info_full_name'] = $fullname;
        $_SESSION['info_email'] = $useremail;
        $_SESSION['info_gender'] = $usergendar;
        $_SESSION['info_birth_day'] = $userbday;
        $_SESSION['info_mobile_number'] = $mobile_number;
        $_SESSION['info_fathers_name'] = $fathers_name;
        $_SESSION['info_mothers_name'] = $mothers_name;
        $_SESSION['info_district'] = $district;
        $_SESSION['info_datatype'] = 'error';

        header("Location: ../files/input.php");
    }
endif;
