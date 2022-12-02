<?php
require('./read.php');
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
        <form class="create-main" action="create.php" method="post">
            <h3>CREATE USER</h3>
            <input type="text" name="username" placeholder="user" required>
            <input type="text" name="password" placeholder="password" required>
            <input type="submit" name="create" value="Create">
        </form>
        <table class="read-main">
            <tr>
                <th>ID</th>
                <th>USERNAME</th>
                <th>PASSWORD</th>
                <th>ACTIONS</th>
            </tr>
            <?php while($result = mysqli_fetch_array($sqlAccount)){?>
            <tr>
                <td><?php echo $result['id']; ?></td>
                <td><?php echo $result['username']; ?></td>
                <td><?php echo $result['password']; ?></td>
                <td class="form-td" >
                    <!--//update form -->
                <form action="update.php" method="post">
              <input type="submit" name="edit" value="EDIT" />
              <input type="hidden" name="editId" value="<?php echo $result['id']; ?>" />
              <input type="hidden" name="editUsername" value="<?php echo $result['username']; ?>" />
              <input type="hidden" name="editPassword" value="<?php echo $result['password']; ?>" />

            </form>
                <form action="delete.php" method="post">
                <input type="submit" name="delete" value="DELETE">
                <input type="hidden" name="deleteId" value="<?php echo $result['id']?>">
                </form>
                </td>
            </tr>    
            <?php } ?>
        </table>
    </div>
</body>
</html>