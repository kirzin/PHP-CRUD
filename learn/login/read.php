<?php
require('./database.php');

$queryAccount = "select * from account";
$sqlAccount = mysqli_query($connection,$queryAccount);
?>