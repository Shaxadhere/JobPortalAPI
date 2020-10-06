<?php

include_once('../../config.php');

$conn = connect();

$errors = array();

$workerID = $_REQUEST['workerID'];
$employerName = $_REQUEST['employername'];
$employerAddress = $_REQUEST['employerAddress'];
$employerArea = $_REQUEST['employerArea'];
$employerCity = $_REQUEST['employerCity'];

if(empty($workerID)){
    array_push($errors, "Your session expired, please login again");
}

if(empty($employerName)){
    array_push($errors, "Employer name is required");
}

if(empty($employerAddress)){
    array_push($errors, "Employer address is required");
}

if(empty($employerArea)){
    array_push($errors, "Employer area is required");
}

if(empty($employerCity)){
    array_push($errors, "Employer city is required");
}

if($errors == null){
    insertData(
        "tbl_worker_exp",
        array(
            "EmployerName",
            "EmployerAddress",
            "EmployerArea",
            "EmployerCity",
            "WorkerExpID"
        ),
        array(
            $employerName,
            $employerAddress,
            $employerArea,
            $employerCity,
            $workerID
        ),
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