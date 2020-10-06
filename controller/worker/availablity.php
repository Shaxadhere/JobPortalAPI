<?php

include_once('../../config.php');

$conn = connect();

$errors = array();

$workerID = $_REQUEST['workerID'];
$status = $_REQUEST['status'];

if(empty($workerID)){
    array_push($errors, "Your session expired, please login again");
}

if($errors == null){
    editData(
        "tbl_worker",
        array(
            "Available",
            $status
        ),
        "PK_ID",
        $workerID,
        $conn
    );
    $result = array("result" => "true");
    echo json_encode($result);
}
else{
    $result = array("result" => $errors);
    echo json_encode($result);
}



?>