<?php

include_once('../../config.php');

$conn = connect();

$errors = array();

$employerID = $_REQUEST['employerId'];

if(empty($employerID)){
    array_push($errors, "Your session expired, please login again");
}

if($errors == null){
    $filterWorkers = fetchData("tbl_worker", $conn);
    $workers = mysqli_fetch_assoc($filterWorkers);
    $result = array(
        "success" => "true",
        "result" => $workers
    );
    echo json_encode($result);
}

?>