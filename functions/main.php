<?php

function uploadFile($file, $directory, $size){

    $target_file = $directory . basename($file["name"]);

    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    $sizeInBytes = $size * 1000;

    $check = getimagesize($file["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    }
    else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    if ($file["size"] > $sizeInBytes) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    $temp = explode(".", $file["name"]);
    $newfilename = round(microtime(true)) . '.' . end($temp);

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    }
    else {
        if (move_uploaded_file($file["tmp_name"], $directory . $newfilename)) {
        echo "The file ". htmlspecialchars( basename( $file["name"])). " has been uploaded.";
        } 
        else {
        echo "Sorry, there was an error uploading your file.";
    }
  }

}

?>