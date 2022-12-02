<?php

require('./database.php');

if(isset($_POST["delete"])){
$deleteId = $_POST['deleteId'];
    $queryDelete = "DELETE FROM account WHERE id = $deleteId";
    $sqlDelete = mysqli_query($connection,$queryDelete);

    echo '<script>alert("Successfull deleted id: '.$deleteId.'!")</script>';
    echo '<script>window.location.href = "index.php"</script>';
}else{
    echo '<script>window.location.href = "index.php"</script>';
}
?>