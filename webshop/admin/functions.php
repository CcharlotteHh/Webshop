<?php

function check_login($conn)
{
    if (isset($_SESSION['user_id'])) {
        $id = $_SESSION['user_id'];
        $query = "SELECT * form users where user_id = '$id' limit 1";

        $result = mysqli_query($conn, $query);
        if ($result && mysqli_num_rows($result) > 0) {
            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
            echo $user_data;
        }
    }

    //redirect to login page
    header('Location:login.php');
    die;
}

function emptyInputLogin($username, $password)
{
    global $result;

    $result;
    if (empty($username) || empty($password)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}



