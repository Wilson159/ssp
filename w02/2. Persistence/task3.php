<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>High / Low</title>
</head>

<body>

    <?php
    $num = rand(1, 100);
    session_start();
    $_SESSION['num'] = $num;
    ?>

    <form method="post">
        <fieldset>
            <legend>Guess The Number</legend>
            <div>
                <input type="text" name="guess">
            </div>
            <div>
                <br>
                <input type="submit" value="Submit &rarr;" name="submit">
            </div>
        </fieldset>
    </form>

    <?php
    if (!isset($_POST['submit']) && !isset($_POST['guess'])) return;

    if ($_POST['guess'] == $_SESSION['num']) {
        
    }
    ?>

</body>

</html>