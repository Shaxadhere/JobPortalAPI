<?php

include_once('assets/rapid.php');


function connect(){
    define("server", "localhost");
    define("usr","oreo");
    define("pas","786786PkPk");
    define("data","db_workfinder");
    $connection = mysqli_connect(server, usr, pas, data) or die("failed to connect to database");
    return ($connection);
}

?>