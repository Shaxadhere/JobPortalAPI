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
    array_push($errors,"Full name is required");
}

if(empty($Email)){
    array_push($errors,"Email is required");
}

if(empty($Password)){
    array_push($errors,"Password is required");
}

if(empty($Mobile)){
    array_push($errors,"Mobile number is required");
}

if(empty($Address)){
    array_push($errors,"Address is required");
}

if(checkExistance("tbl_employer", "Email", $Email, $conn)){
    array_push($errors, "Email already exists");
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

    $user = verifyValues(
        "tbl_employer",
        array(
            "Email",
            $Email
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
        array_push($errors, "Something went wrong");
        $result = array(
            "success" => "false",
            "result" => $errors
        );
        echo json_encode($result);
    }
    

}
else{
    $result = array(
        "success" => "false",
        "result" => $errors
    );
    echo json_encode($result);
}

?>


