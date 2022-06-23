<?php

$sname = "sql6.freesqldatabase.com";
$uname ="sql6501386";
$password = "iTYazKGUpQ";

$db_name= "sql6501386";
$port="3306";

$conn= mysqli_connect($sname, $uname, $password, $db_name,$port);

if (!$conn){
    echo "Connection failed!";
}
?>