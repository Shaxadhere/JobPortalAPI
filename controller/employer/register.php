<?php

include_once('../../config.php');

$conn = connect();

$errors = array();

$Fullname = $_REQUEST['fullname'];
$Email = $_REQUEST['email'];
$Password = $_REQUEST['password'];
$Mobile = $_REQUEST['mobile'];
$Address = $_REQUEST['address'];


if(empty($Fullname)){
    $errors['fullname'] = "Full name is required";
    // array_push($errors, "Full name is required");
}

if(empty($Email)){
    $errors['email'] = "Email is required";
}

if(empty($Password)){
    $errors['password'] = "Password is required";
}

if(empty($Mobile)){
    $errors['mobile'] = "Mobile number is required";
}

if(empty($Address)){
    $errors['address'] = "Address is required";
}

if($errors == null){

    insertData(
        "tbl_employer",
        array(
            "FullName",
            "Email",
            "Password",
            "Mobile",
            "Address"
        ),
        array(
            $Fullname,
            $Email,
            $Password,
            $Mobile,
            $Address
        ),
        $conn
    );
    $errors['result'] = "true";

}
else{
    echo json_encode($errors);
}

?>


