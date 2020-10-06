<?php

function construct($conn){
    $query = "INSERT INTO tbl_admin (FullName, Email, Password, Picture)
    SELECT * FROM (SELECT 'admin', 'admin@workfinder.com', '123', 'http://shaxad.com/apis/assets/avatar.jpg') AS tmp
    WHERE NOT EXISTS (
        SELECT * FROM tbl_admin
    ) LIMIT 1";
    mysqli_query($conn, $query);
}

?>