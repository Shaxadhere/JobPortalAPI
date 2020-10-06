<?php

include_once('../../config.php');

$conn = connect();

$errors = array();

$adminID = $_REQUEST['adminID'];
$workerID = $_REQUEST['workerID'];

?>