<?php

include_once('assets/rapid.php');
include_once('functions/main.php');

// default database connection method
function connect(){
    define("server", "localhost");
    define("usr","oreo");
    define("pas","786786PkPk");
    define("data","db_workfinder");
    $connection = mysqli_connect(server, usr, pas, data) or die("failed to connect to database");
    return ($connection);
}

// $query = "INSERT INTO tbl_admin (FullName, Email, Password, Picture)
// SELECT * FROM (SELECT 'admin', 'admin@workfinder.com', '1234', 'http://shaxad.com/apis/assets/avatar.jpg') AS tmp
// WHERE NOT EXISTS (
// SELECT * FROM tbl_admin
// ) LIMIT 1";
// mysqli_query(connect(), $query);

?>