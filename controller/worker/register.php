<?php

include_once('../../config.php');

$conn = connect();

$name = $_REQUEST['name'];
$fathername = $_REQUEST['fathername'];
$cnic = $_REQUEST['cnic'];
$cnic_front = $_REQUEST['cnic_front'];
$cinc_back = $_REQUEST['cinc_back'];
$fathercnic = $_REQUEST['fathercnic'];
$dateofbirth = $_REQUEST['dateofbirth'];
$gender = $_REQUEST['gender'];
$address = $_REQUEST['address'];
$picture = $_REQUEST['picture'];
$mobile = $_REQUEST['mobile'];
$whatsapp = $_REQUEST['whatsapp'];
// $reference = $_REQUEST['reference'];
$emergency_contact = $_REQUEST['emergency_contact'];


$cnic_front_val = random_strings(20);
$cnic_back_val = random_strings(20);
$picture = random_strings(20);


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


?>