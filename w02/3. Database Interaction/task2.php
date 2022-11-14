<?php
// SQL Connection
$conn = mysqli_connect('localhost', 'root', '', 'w02');
if ($conn->connect_error) {
    die('Conection failed: ') . $conn->connect_error;
}

$query = 'SELECT * FROM student';
$result = $conn->query($query);
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

    <table>
        <tr>
            <th>Surname</th>
            <th>Forename</th>
            <th>Address</th>
            <th>Telephone</th>
            <th>Date of Birth</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $surname = $row['surname'];
                $forename = $row['forename'];
                $address = $row['address'];
                $telephone = $row['telephone'];
                $dob = $row['date_of_birth'];

                echo <<<END
                    <tr>
                        <td>$surname</td>
                        <td>$forename</td>
                        <td>$address</td>
                        <td>$telephone</td>
                        <td>$dob</td>
                    <tr>
                    END;
            }
        } else {
            echo "0 results";
        }
        ?>
    </table>

</body>

</html>

<?php
$conn->close();
?>