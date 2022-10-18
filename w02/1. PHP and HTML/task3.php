<?php
if (!empty($_POST)) {
    $fn = $_POST['first_name'];
    $sn = $_POST['surname'];
    $age = $_POST['age'];
} else {
    $fn = [""];
    $sn = [""];
    $age = 0;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Display Form Data</title>
</head>

<body>

    <form method="post">
        <fieldset>
            <legend>Personal Details</legend>
            <div>
                <label for="first_name">First name:</label>
                <input value="<?= $fn[0] ?> " type="text" id="first_name" name="first_name[]">
            </div>
            <div>
                <label for="surname">Surname:</label>
                <input value="<?= $sn[0] ?>" type="text" id="surname" name="surname[]">
            </div>
            <div>
                <label for="age">Age:</label>
                <input value="<?= $age[0] ?>" type="number" id="age" name="age[]">
            </div>
            <div>
                <input type="submit" value="Submit">
            </div>
        </fieldset>
    </form>

</body>

</html>