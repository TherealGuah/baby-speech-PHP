<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Baby Speech</title>
    <link rel="stylesheet" href="css/styles.css">
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>

<body>

<h1>Welcome to Baby Speech</h1>

<form action="" method="post">
    <label for="adultWords">Go ahead!! Be a baby...</label>
    <br>
    <input type="text" id="adultWords" name="adultWords" value="" placeholder="Hello I love racoons! => hewwo i wove wacoons!" size="50" required>
    <br>
    <input type="submit" value="Babify Me!">
</form>
<section>
<?php
require 'babyspeech.php';

if (isset($_POST['adultWords'])) {
    echo '<p>' . convertToBabySpeech($_POST['adultWords']) . '</p>';
}
?>
</section>
</body>

</html>