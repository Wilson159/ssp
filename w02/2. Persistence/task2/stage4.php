<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration: Stage 4</title>
</head>

<body>
    <?php
    if (empty($_POST)) return;

    $name = $_POST['full_name'];
    $address = $_POST['address'];
    $dob = $_POST['date_of_birth'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $maiden_name = $_POST['maiden_name'];
    $tos_status = "Accepted";

    echo <<<END
    <p>Full Name: $name</p>
    <p>Address: $address</p>
    <p>Date of Birth: $dob</p>
    <p>Username: $username</p>
    <p>Password: $password</p>
    <p>Mothers Maiden Name: $maiden_name</p>
    <p>TOS Status: $tos_status</p>
    END;
    ?>
</body>

</html>