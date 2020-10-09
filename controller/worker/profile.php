<?php

include_once('../../config.php');

$conn = connect();

$errors = array();

$workerID = $_REQUEST['workerID'];

if(empty($workerID)){
    array_push($errors, "Your session expired, please login again");
}

if($errors == null){
    $filterWorker = fetchDataById(
        "tbl_worker",
        "PK_ID",
        $workerID,
        $conn
    );
    $worker = mysqli_fetch_assoc($filterWorker);
    $result = array(
        "success" => "true",
        "result" => $worker
    );
    echo json_encode($result);
}
else{
    $result = array(
        "success" => "false",
        "error" => $errors
    );
    echo json_encode($result);
}


?>