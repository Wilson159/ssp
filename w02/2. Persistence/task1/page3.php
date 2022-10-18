<?php
if (!isset($_COOKIE['username'])) {
    header("Location: page1.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Page 3</title>
</head>

<body>
    <h2><a href="./page1.php">Page 1</a></h2>
    <h2><a href="./page2.php">Page 2</a></h2>

    <h1>Page 3</h1>
    <form method="post">
        <input type="submit" value="Log Out" name="logout">
    </form>

    <?php
    if (!empty($_POST['logout'])) {
        setcookie(
            "username",
            "Fred",
            1
        );
        header("Location: page1.php");
    }
    ?>

</body>

</html>