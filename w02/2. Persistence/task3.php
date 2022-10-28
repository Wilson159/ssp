<?php
$output = "Please guess the number";

if (isset($_POST["num"]) && isset($_POST["guess"])) {
    $num = $_POST["num"];
    $guess = $_POST["guess"];

    if ($guess > $num) {
        $output = " Your guess is too high! ";
    } elseif ($guess < $num) {
        $output = " Your guess is too low! ";
    } else {
        $output = " You guessed correctly! $num ";
        $num = rand(1, 100); // set a new number
    }
} else {
    $num = rand(1, 100);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guessing Game</title>
</head>

<body>
    <h3><?= $output ?></h3>

    <form method="post">
        <fieldset>
            <legend>Guess The Number</legend>
            <div>
				<input type="hidden" name="num" value="<?= $num ?>">
                <input type="number" name="guess">
            </div>
            <div>
                <input type="submit" value="Submit &rarr;">
            </div>
        </fieldset>
    </form>
</body>

</html>
