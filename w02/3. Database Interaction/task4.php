<?php
// SQL Connection
$conn = mysqli_connect('localhost', 'root', '', 'w02');
if ($conn->connect_error) {
    die('Conection failed: ') . $conn->connect_error;
}

if ( isset($_POST['surname']) ) {
    $uppersurname = strtoupper($_POST['surname']);
    $upperforename = strtoupper($_POST['forename']);

    $query = $conn->prepare("INSERT INTO student (surname, forename, address, telephone, date_of_birth)
                            VALUES (?, ?, ?, ?, ?);");
    $query->bind_param('sssss', $uppersurname, $upperforename, $_POST['address'], $_POST['telephone'], $_POST['dob']);
    $res = $query->execute();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
</head>

<body>

    <form method="post">
        <fieldset>
            <legend>Add Student</legend>
            <!-- Surname -->
            <div>
                <label for="surname">Surname:</label>
                <input type="text" name="surname" required>
            </div>
            <!-- Forename -->
            <div>
                <label for="forename">Forename:</label>
                <input type="text" name="forename" required>
            </div>
            <!-- Address -->
            <div>
                <label for="address">Address:</label>
                <input type="text" name="address" required>
            </div>
            <!-- Telephone -->
            <div>
                <label for="telephone">Telephone:</label>
                <input type="text" name="telephone" required>
            </div>
            <!-- Date of Birth -->
            <div>
                <label for="dob">Date of Birth:</label>
                <input type="text" name="dob" required>
            </div>
            <!-- Submit -->
            <div>
                <input type="submit" value="Submit &rarr;">
            </div>
        </fieldset>
    </form>

    <?php
    if ($res) {
        echo "<h3>Successful!</h3>";
    }
    ?>

</body>

</html>