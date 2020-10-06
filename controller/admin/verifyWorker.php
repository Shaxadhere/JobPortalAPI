<?php

include_once('../../config.php');

$conn = connect();

$errors = array();

$adminId = $_REQUEST['adminID'];
$workerID = $_REQUEST['workerID'];
$status = $_REQUEST['status'];

if(empty($adminId)){
    array_push($errors, "Your session is expired, please login again");
}

if($errors == null){
    editData(
        "tbl_worker",
        array(
            "Status",
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