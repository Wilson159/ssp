<?php
if (!empty($_POST)) {
  $module = $_POST['module'];
  $array = [$module[0], $module[1], $module[2], $module[3]];
  sort($array);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Form Input as an Array</title>
</head>

<body>
  <form method="post">
    <fieldset>
      <legend>My Modules this Semester</legend>
      <input type="text" name="module[]">
      <input type="text" name="module[]">
      <input type="text" name="module[]">
      <input type="text" name="module[]">
      <input type="submit" name="submit" value="Submit">
    </fieldset>
  </form>

  <?php
  if (!empty($_POST["submit"])) {
    echo <<<END
  <dl>
    <dt>Modules:</dt>
    <dd>- $array[0]</dd>
    <dd>- $array[1]</dd>
    <dd>- $array[2]</dd>
    <dd>- $array[3]</dd>
  </dl>
  END;
  }
  ?>

</body>

</html>