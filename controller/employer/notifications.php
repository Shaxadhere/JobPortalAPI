<?php

include_once('../../config.php');

$conn = connect();

$errors = array();
$notifList = array();

$employerID = $_REQUEST['employerId'];

if(empty($employerID)){
    array_push($errors, "Your session expired, please login again");
}


if($errors == null){
    $filterNotif = fetchData("tbl_empnotif", $conn);
    
    foreach ($filterNotif as $notif) {
        array_push($notifList, $notif);
    }
    $result = array(
        "success" => "true",
        "result" => $notifList
    );
    echo json_encode($result);
}

?>