<?php
require('./database.php');

if(isset($_POST['create'])){
    $username = $_POST['username'];
    $password =$_POST['password'];

    $queryCreate = "INSERT INTO account VALUE(null,'$username','$password')";
    $sqlCreate = mysqli_query($connection,$queryCreate);
    echo '<script>alert("Succesful")</script></br>';
    echo '<script>window.location.href = "index.php"</script>';
}else{
    echo '<script>window.location.href = "index.php"</script>';
}
?>