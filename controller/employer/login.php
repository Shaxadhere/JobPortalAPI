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
    $isAuthenticated = mysqli_fetch_assoc($user);
    if(isset($isAuthenticated)){
        $result = array(
            "success" => "true",
            "result" => $isAuthenticated
        );
        echo json_encode($result);
    }
    else{
        array_push($errors, "Invalid Credentials");
        $result = array(
            "success" => "false",
            "error" => $errors
        );
        echo json_encode($result);
    }
}
else{
    $result = array(
        "success" => "false",
        "error" => $errors
    );
    echo json_encode($result);
}

?>