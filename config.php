<?php

include_once('assets/rapid.php');


function connect(){
    define("server", "localhost");
    define("usr","root");
    define("pas","");
    define("data","db_FeeSystem");
    $connection = mysqli_connect(server, usr, pas, data) or die("failed to connect to database");
    return ($connection);
}

?>