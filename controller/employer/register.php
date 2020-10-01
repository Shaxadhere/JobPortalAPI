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
    array_push($errors, "Full name is required");
}

if(empty($Email)){
    array_push($errors, "Email is required");
}

if(empty($Password)){
    array_push($errors, "Password is required");
}

if(empty($Mobile)){
    array_push($errors, "Mobile number is required");
}

if($Address){
    array_push($errors, "Address is required");
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
    echo "true";

}
else{
    echo json_encode($errors);
}

?>


