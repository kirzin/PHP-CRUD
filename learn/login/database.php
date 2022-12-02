<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'learnphp';

$connection = mysqli_connect($host,$user,$password,$database);
if(mysqli_connect_error()){
    echo "Error:cannot connect </br>";
    echo "Message: ".mysqli_connect_error()."br";
}/*else{
    echo "Success";
}*/

?>