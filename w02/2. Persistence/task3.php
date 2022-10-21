<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guessing Game</title>
</head>

<body>
    <form method="post">
        <fieldset>
            <legend>Guess The Number</legend>
            <div>
                <input type="text" name="guess">
            </div>
            <div>
                <input type="submit" value="Submit &rarr;" name="submit">
            </div>
        </fieldset>
    </form>

    <?php
    $num = rand(1, 100);

    if (isset($_POST['guess'])) {
        $guess = $_POST['guess'];
    } else {
        $guess = '';
    }

    echo <<<TEST
    Number: $num
    Guess: $guess

    TEST;

    if (!isset($_POST['submit'])) return;team
    if ($num == $guess) {
        echo "<script>console.log('test');</script>";
    }

    ?>
</body>

</html>