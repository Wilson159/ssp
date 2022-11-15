<?php
// SQL Connection
$conn = mysqli_connect('localhost', 'root', '', 'w02');
if ($conn->connect_error) {
    die('Conection failed: ') . $conn->connect_error;
}

if (isset($_POST['forename'])) {
    $forename = $_POST['forename'];

    $query = $conn->prepare('SELECT * FROM student WHERE forename=?');
    $query->bind_param('s', $forename);
    $query->execute();

    $result = $query->get_result();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Output</title>
</head>

<body>

    <form method="post">
        <div>
            <strong><label for="forename">Forename:</label></strong>
            <br>
            <input type="text" id="forename" name="forename">
            <input type="submit" value="Submit" name="submit">
        </div>
    </form>
    <br>

    <?php
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $surname = $row['surname'];
            $forename = $row['forename'];
            $address = $row['address'];
            $telephone = $row['telephone'];
            $dob = $row['date_of_birth'];

            echo <<<END
                    <table>
                    <tr>
                        <th>Surname</th>
                        <th>Forename</th>
                        <th>Address</th>
                        <th>Telephone</th>
                        <th>Date of Birth</th>
                    </tr>
                    <tr>
                        <td>$surname</td>
                        <td>$forename</td>
                        <td>$address</td>
                        <td>$telephone</td>
                        <td>$dob</td>
                    <tr>
                    </table
                    END;
        }
    } else {
        echo "0 results";
    }
    ?>
</body>

</html>

<?php
$conn->close();
?>