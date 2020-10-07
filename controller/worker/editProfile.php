<?php

include_once('../../config.php');

$conn = connect();

$errors = array();

$workerID = $_REQUEST['workerID'];

$name = $_REQUEST['name'];
$fathername = $_REQUEST['fathername'];
$cnic = $_REQUEST['cnic'];
$fathercnic = $_REQUEST['fathercnic'];
$dateofbirth = $_REQUEST['dateofbirth'];
$gender = $_REQUEST['gender'];
$address = $_REQUEST['address'];
$mobile = $_REQUEST['mobile'];
$whatsapp = $_REQUEST['whatsapp'];
$reference = $_REQUEST['reference'];
$emergency_contact = $_REQUEST['emergency_contact'];

$filterWorker = fetchDataById(
    "tbl_worker",
    "PK_ID",
    $workerID,
    $conn
);
$worker = mysqli_fetch_assoc($filterWorker);

echo $worker['Email'];

if(empty($name)){
    array_push($errors, "Full name is required");
}

if(empty($fathername)){
    array_push($errors, "Father name is required");
}

if(empty($cnic)){
    array_push($errors, "CNIC is required");
}

if(empty($fathercnic)){
    array_push($errors, "Father's cnic is required");
}

if(empty($dateofbirth)){
    array_push($errors, "Date of birth is required");
}

if(empty($gender)){
    array_push($errors, "Gender is required");
}

if(empty($address)){
    array_push($errors, "Address is required");
}

if(empty($mobile)){
    array_push($errors, "Mobile is required");
}

if(empty($whatsapp)){
    array_push($errors, "Whatsapp is required");
}

if(empty($reference)){
    array_push($errors, "Reference is required");
}

if(empty($emergency_contact)){
    array_push($errors, "Emergency number is required");
}


if(empty($workerID)){
    array_push($errors, "Your session expired, please login again");
}

if($errors == null){
    editData(
        "tbl_worker",
        array(
            ""
        ),
        "PK_ID",
        $workerID,
        $conn
    );
}

?>