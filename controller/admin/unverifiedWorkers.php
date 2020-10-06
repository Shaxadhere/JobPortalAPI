<?php

include_once('../../config.php');

$conn = connect();

$errors = array();

$adminId = $_REQUEST['adminId'];

if(empty($adminId)){
    array_push($errors, "Your session is expired, please login again");
}

if($errors == null){
    $workers = verifyValues(
        "tbl_worker",
        array(
            "Status",
            0
        ),
        $conn
    );
    if(isset($workers)){
        $result = array("result" => $workers);
        echo json_encode($result);
    }
    else{
        array_push($errors, "There's no unverified worker");
        $result = array("result" => $errors);
        echo json_encode($result);
    }
}
else{
    $result = array("result" => $errors);
    echo json_encode($result);
}


?>