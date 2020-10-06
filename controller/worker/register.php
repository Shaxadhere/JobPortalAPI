<?php

include_once('../../config.php');

$conn = connect();

$errors = array();

$name = $_REQUEST['name'];
$fathername = $_REQUEST['fathername'];
$cnic = $_REQUEST['cnic'];
$fathercnic = $_REQUEST['fathercnic'];
$dateofbirth = $_REQUEST['dateofbirth'];
$gender = $_REQUEST['gender'];
$address = $_REQUEST['address'];
$mobile = $_REQUEST['mobile'];
$whatsapp = $_REQUEST['whatsapp'];
// $reference = $_REQUEST['reference'];
$emergency_contact = $_REQUEST['emergency_contact'];


if(empty($name)){
    array_push($errors, "Full name is required");
}

if(empty($fathername)){
    array_push($errors, "Full name is required");
}

if(empty($cnic)){
    array_push($errors, "Full name is required");
}

if(empty($fathercnic)){
    array_push($errors, "Full name is required");
}

if(empty($dateofbirth)){
    array_push($errors, "Full name is required");
}

if(empty($gender)){
    array_push($errors, "Full name is required");
}

if(empty($address)){
    array_push($errors, "Full name is required");
}

if(empty($mobile)){
    array_push($errors, "Full name is required");
}

if(empty($whatsapp)){
    array_push($errors, "Full name is required");
}

if(empty($emergency_contact)){
    array_push($errors, "Full name is required");
}

if($errors == null){
    insertData(
        "tbl_worker",
        array(
            "name",
            "fathername",
            "cnic",
            "cnic_front",
            "cinc_back",
            "fathercnic",
            "dateofbirth",
            "gender",
            "address",
            "picture",
            "mobile",
            "whatsapp",
            "emergency_contact"
        ),
        array(
            $name,
            $fathername,
            $cnic,
            $cnic_front,
            $cinc_back,
            $fathercnic,
            $dateofbirth,
            $gender,
            $address,
            $picture,
            $mobile,
            $whatsapp,
            $emergency_contact
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