<?php

include_once('../../config.php');

$conn = connect();

$errors = array();
$workerList = array();

$employerID = $_REQUEST['employerId'];

if(empty($employerID)){
    array_push($errors, "Your session expired, please login again");
}


if($errors == null){
    $filterWorkers = fetchData("tbl_worker", $conn);
    
    foreach ($filterWorkers as $worker) {
        array_push($workerList, $worker);
    }
    $result = array(
        "success" => "true",
        "result" => $workerList
    );
    echo json_encode($result);
}

?>