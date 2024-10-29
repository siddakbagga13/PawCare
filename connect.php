<?php 
$hostname = "localhost";
$userid = "root";
$pass = "siddaksk";
$dbname = "pawcare";
$conn = new mysqli($hostname,$userid,$pass,$dbname);

if(!$conn){
    echo "error in getting connection";
}
else{
    echo "connection successfull";
}
echo "<br>";
?>