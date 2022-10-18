<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Sign In - Page 1</title>
</head>

<body>
    <?php
    if (!empty($_POST)) {
        $uname = $_POST['uname'];
        $pw = $_POST['pw'];
    } else {
        $uname = "";
        $pw = "";
    }
    ?>

    <h2><a href="./page2.php">Page 2</a></h2>
    <h2><a href="./page3.php">Page 3</a></h2>

    <form method="post">
        <fieldset>
            <legend>Personal Details</legend>
            <div>
                <label for="username">Username:</label>
                <input value="<?= $uname ?>" type="text" id="username" name="uname">
            </div>
            <div>
                <label for="password1">Password:</label>
                <input value="<?= $pw ?>" type="password" id="password1" name="pw">
            </div>
            <div>
                <input type="submit" value="Submit" name="submit">
            </div>
        </fieldset>
    </form>
    <?php
    if (empty($_POST['submit'])) return;
    $output = "";

    if (strlen($uname) < 4 || strlen($uname) > 15) {
        $output .= "<li>Username must be no less than 4 characters and no greater than 15.</li>";
    }

    if (strlen($pw) == 0) {
        $output .= "<li>You must enter a password.</li>";
    }

    if (strlen($output) == 0) {
        if ($uname != "Fred" && $pw != "Bloggs") {
            $output .= "<li>Incorrect username or password!</li>";
        } else {
            $output .= "<li>Success!</li>";

            setcookie(
                "username",
                "Fred",
                time() + 3600
            );
        }
    }

    echo $output;
    ?>

</body>

</html>