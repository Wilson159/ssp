<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration: Stage 2</title>
</head>

<body>
    <form method="post" action="stage3.php">
        <fieldset>
            <legend>Registration Wizard</legend>
            <!-- Full Name -->
            <div>
                <input type="hidden" value="<?php echo $_POST['full_name'] ?>" name="full_name">
            </div>
            <!-- Address -->
            <div>
                <input type="hidden" value="<?php echo $_POST['address'] ?>" name="address">
            </div>
            <!-- Date of Birth -->
            <div>
                <label for="date_of_birth">Date of Birth:</label>
                <input type="date" name="date_of_birth" required>
            </div>
            <!-- Username -->
            <div>
                <label for="username">Username:</label>
                <input type="text" name="username" required>
            </div>
            <!-- Password -->
            <div>
                <label for="password">Password:</label>
                <input type="password" name="password" required>
            </div>
            <!-- Mother's Maiden Name -->
            <div>
                <label for="maiden_name">Mother's Maiden Name:</label>
                <input type="text" name="maiden_name" required>
            </div>
            <!-- Submit -->
            <div>
                <input type="submit" value="Submit &rarr;">
            </div>
        </fieldset>
    </form>
</body>

</html>