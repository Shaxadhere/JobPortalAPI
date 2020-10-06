<?php

include_once('assets/rapid.php');
include_once('functions/main.php');


//default database connection method
function connect(){
    define("server", "localhost");
    define("usr","root");
    define("pas","");
    define("data","db_workfinder");
    $connection = mysqli_connect(server, usr, pas, data) or die("failed to connect to database");
    return ($connection);
}

//constructs application
construct(connect());

?>