<?php

include_once('config.php');

function verifyValues(string $table, array $data){

   //breaking data array//
   $ini = '';
   $c = 0;
   $mm = count($data);
   foreach($data as $item){
       $c++;
       if($mm % 2 == 0){
           $ini .= "`$item`=";
       }
       if($mm % 2 != 0){
           $ini .= "'$item'";
       }
       if($mm % 2 != 0 && $c < count($data))
       {
           $ini.=' and ';
       }
       if($c == count($data)){
           $ini .= '';
       }
       $mm--;
   }

    $query = "SELECT * FROM `$table` WHERE $ini";
    return $query;
}


echo verifyValues("tbl_employer", array("Email", "shaxad.here@gmail.com", "Password", "123", "PK_ID", 2));
echo "<br>";
echo "SELECT * FROM `tbl_employer` WHERE `Email` = 'shaxad.here@gmail.com' and `Password` = '123' and `PK_ID` = 2";



// print("welcome to job portal API")

?>