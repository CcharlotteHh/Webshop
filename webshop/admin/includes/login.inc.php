<?php
if(isset($_POST['login'])){
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    echo "worjs";
    
    include '../db.php';
    include '../functions.php';

    if(emptyInputLogin($user_name, $pwd)!==false){
        header('Location:../login.php?error=emptyinput');
        exit();  
}

loginUser($conn,$user_name, $password);

}
else{
    header('Location:../login.php');
    exit();
}

?>