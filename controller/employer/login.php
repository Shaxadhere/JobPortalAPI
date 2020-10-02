<?php

include_once('../../config.php');

$conn = connect();

$errors = array();

$Email = $_REQUEST['email'];
$Password = $_REQUEST['password'];

if(empty($Email)){
    array_push($errors, "Email is required");
}

if(empty($Password)){
    array_push($errors, "Password is required");
}

if($errors == null){
    $user = verifyValues(
        "tbl_employer",
        array(
            "Email",
            $Email,
            "Password",
            $Password
        ),
        $conn
    );
    $isAuthenticated = mysqli_fetch_array($user);
}

?>