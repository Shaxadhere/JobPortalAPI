<?php

include_once('config.php');

print("welcome to job portal API");

$conn = connect();
$id = $_REQUEST['id'];


$lol = editData(
    "tbl_employer",
    array(
        "Mujahid"
    ),
    "PK_ID",
    $id,
    $conn
);

echo $lol;

?>