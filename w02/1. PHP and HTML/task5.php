<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Calculator</title>
</head>

<body>
  <form method="post">
    <fieldset>
      <legend>Calculator</legend>
      <div>
        <label for="first_number">1:</label>
        <input type="number" id="first_number" name="number[]">
        <label for="second_number">2:</label>
        <input type="number" id="second_number" name="number[]">
      </div>
      <div>
        <p></p>
        <input type="submit" value="/" name="division">
        <input type="submit" value="*" name="multiplication">
        <input type="submit" value="+" name="addition">
        <input type="submit" value="-" name="subtraction">
        <input type="submit" value="%" name="remainder">
      </div>
    </fieldset>
  </form>

  <?php
  if (!empty($_POST)) {
    $num1 = $_POST['number'][0];
    $num2 = $_POST['number'][1];
  }

  $answer = 0;
  $operator = 0;

  if (isset($_POST['division'])) {
    $answer = $num1 / $num2;
    $operator = "/";
  } elseif (isset($_POST['multiplication'])) {
    $answer = $num1 * $num2;
    $operator = "*";
  } elseif (isset($_POST['addition'])) {
    $answer = $num1 + $num2;
    $operator = "+";
  } elseif (isset($_POST['subtraction'])) {
    $answer = $num1 - $num2;
    $operator = "-";
  } elseif (isset($_POST['remainder'])) {
    $answer = $num1 % $num2;
    $operator = "%";
  }
  ?>

  <form>
    <fieldset>
      <legend>Calculation</legend>
      <?php
      if (!empty($_POST)) {
        echo <<<END
              <p>
              $num1 $operator $num2 = $answer
              </p>
              END;
      }
      ?>
    </fieldset>
  </form>

</body>

</html>