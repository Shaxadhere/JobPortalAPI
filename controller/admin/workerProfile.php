<?php

include_once('../../config.php');

$conn = connect();

$errors = array();

$adminID = $_REQUEST['adminID'];
$workerID = $_REQUEST['workerID'];

if(empty($adminID)){
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
    $result = array("result" => $worker);
    echo json_encode($result);
}
else{
    $result = array("result" => $errors);
    echo json_encode($result);
}


?>