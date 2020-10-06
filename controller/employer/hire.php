<?php

include_once('../../config.php');

$conn = connect();

$errors = array();

$employerID = $_REQUEST['employerId'];
$workerID = $_REQUEST['workerID'];
$date = date('m/d/Y');

if(empty($employerID)){
    array_push($errors, "Your session expired, please login again");
}

if($errors == null){
    insertData(
        "tbl_hiring",
        array(
            "EmployerHiringID",
            "WorkerHiringID",
            "HiringData"
        ),
        array(
            $employerID,
            $workerID,
            $date
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

<!-- PK_ID int PRIMARY key AUTO_INCREMENT,
WorkerHiringID int,
constraint WorkerHiringID foreign key(WorkerHiringID) references tbl_worker(PK_ID),
EmployerHiringID int,
constraint EmployerHiringID foreign key(EmployerHiringID) references tbl_employer(PK_ID),
HiringData date -->
