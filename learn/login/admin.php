<?php

use LDAP\Result;

    require('./database.php');
    require('./read.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
<?php while($result = mysqli_fetch_array($sqlAccount)){?>
    <h1> <?php echo $result['username'] ?></h1>
    <form action="delete.php" method="post">
                <input type="submit" name="delete" value="view">
                <input type="hidden" name="deleteId" value="<?php echo $result['id']?>">
                </form>
    <?php }?>
</body>
</html>