<?php
$output = "Please guess the number";
if (isset($_POST["num"]) && isset($_POST["guess"])) {
    $num = $_POST["num"];
    $guess = $_POST["guess"];
    if ($guess > $num) {
        $output = " Your guess is too 'high' ";
    } elseif ($guess < $num) {
        $output = " Your guess is too 'low' ";
    } else {
        $output = " Wow! Your guess is correct number '" . $num . "'.";
        $num = rand(1, 100); // set a new number
    }
} else {
    $num = rand(1, 100);
}
?>

<html>

<body>
    <H1>Guess the number</H1>
    <h2><?= $output ?></h2>
    <form method="POST">
        <input type="hidden" name="num" value="<?= $num ?>">
        <input type="number" name="guess">
        <button type="submit">Submit</button>
    </form>
</body>

</html>