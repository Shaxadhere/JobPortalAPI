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
    $workersList = mysqli_fetch_assoc($workers);
    if(isset($workersList)){
        $result = array("result" => $workersList);
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