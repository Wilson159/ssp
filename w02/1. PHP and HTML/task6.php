<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Display Form Data</title>
</head>

<body>
    <?php
    if (!empty($_POST)) {
        $username = $_POST['username'];
        $pw1 = $_POST['password1'];
        $pw2 = $_POST['password2'];
    } else {
        $username = "";
        $pw1 = "";
        $pw2 = "";
    }
    ?>

    <form method="post">
        <fieldset>
            <legend>Personal Details</legend>
            <div>
                <label for="username">Username:</label>
                <input value="<?= $username ?>" type="text" id="username" name="username">
            </div>
            <div>
                <label for="password1">Password:</label>
                <input value="<?= $pw1 ?>" type="password" id="password1" name="password1">
            </div>
            <div>
                <label for="password2">Re-enter password:</label>
                <input value="<?= $pw2 ?>" type="password" id="password2" name="password2">
            </div>
            <div>
                <input type="submit" value="Submit" name="submit">
            </div>
        </fieldset>
    </form>

    <?php
    if (empty($_POST['submit'])) return;
    if (strlen($username) < 4 || strlen($username) > 15) {
        echo "<li>Username must be no less than 4 characters and no greater than 15.</li>";
    } elseif ((strlen($pw1) == 0 || strlen($pw2) == 0) || $pw1 != $pw2) {
        echo "<li>You must enter a password and also re-enter it.</li>";
    } else {
        echo "<li>Success!</li>";
    }
    ?>

</body>

</html>