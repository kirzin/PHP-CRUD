<?php 
  require('./database.php');

  if (isset($_POST['edit'])) {
    $editId = $_POST['editId'];
    $editUsername = $_POST['editUsername'];
    $editPassword = $_POST['editPassword'];
  }

  if (isset($_POST['update'])) {
    $updateId = $_POST['updateId'];
    $updateUsername = $_POST['updateUsername'];
    $updatePassword = $_POST['updatePassword'];

    $queryUpdate = "UPDATE account SET username = '$updateUsername', password = '$updatePassword' WHERE id = $updateId";
    $sqlUpdate = mysqli_query($connection, $queryUpdate);

    echo '<script>alert("Successfully updated!")</script>';
    echo '<script>window.location.href = "index.php"</script>';
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .form-td{
        width: auto;
        display: flex;
        padding: 10px;
    }
</style>
<body>
    <div class="main">
    <form class="update-main" action="update.php" method="post">
      <h3>UPDATE USER:</h3>
      <input type="text" name="updateUsername" placeholder="Enter username" value="<?php echo $editUsername ?>" required/>
      <input type="password" name="updatePassword" placeholder="Enter password" value="<?php echo $editPassword ?>"required/>
      <input type="submit" name="update" value="UPDATE" />
      <input type="hidden" name="updateId" value="<?php echo $editId?>" />
    </form>
       
    </div>
</body>
</html>