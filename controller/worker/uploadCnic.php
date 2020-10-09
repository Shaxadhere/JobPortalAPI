<!DOCTYPE html>
<html>
<body>

<form action="" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="cnic" id="cnic">
  <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>

<?php

include_once('../../config.php');

$conn = connect();

$errors = array();


$img = $_FILES['cnic'];

$directory = "../../uploads/worker/";

if($img == null){
  array_push($errors, "Please select a cnic photo");
}

if($errors == null){
  uploadFile($img, $directory, 1000);
  $result = array(
    "success" => "true",
  );
  echo json_encode($result);
}
else{
  $result = array(
    "success" => "false",
    "error" => $errors
  );
  echo json_encode($result);
}



?>