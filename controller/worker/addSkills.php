<?php

include_once('../../config.php');

$conn = connect();

$errors = array();

$skills = $_REQUEST['skills'];
$workerID = $_REQUEST['workerID'];

if(empty($skills)){
    array_push($errors, "Select at least on skill");
}

if(empty($workerID)){
    array_push($errors, "Your session expired, please login again");
}

if($errors == null){
    foreach ($skills as $skill) {
        insertData(
            "tbl_worker_skils",
            array(
                "SkillID",
                "WorkerID"
            ),
            array(
                $skill,
                $workerID
            ),
            $conn
        );
    }
}
else{
    $result = array("result" => $errors);
    echo json_encode($result);
}


?>

