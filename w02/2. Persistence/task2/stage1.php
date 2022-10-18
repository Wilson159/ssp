<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration: Stage 1</title>
</head>

<body>
    <form method="post" action="stage2.php">
        <fieldset>
            <legend>Registration Wizard</legend>
            <!-- Full Name -->
            <div>
                <label for="full_name">Full Name:</label>
                <input type="text" name="full_name" required>
            </div>
            <!-- Address -->
            <div>
                <label for="address">Address:</label>
                <input type="text" name="address" required>
            </div>
            <!-- Submit -->
            <div>
                <input type="submit" value="Submit &rarr;">
            </div>
        </fieldset>
    </form>
</body>

</html>