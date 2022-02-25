<?php

require_once 'vendor/autoload.php';

use App\Person;

if(isset($_POST["signUp"])){
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $personsCode = $_POST['personsCode'];

    $person = new Person($firstName, $lastName, $personsCode);

    try {
        $person->addPerson();
    } catch (\Doctrine\DBAL\Exception $e) {
    }
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign In/Register</title>
</head>
<body>
<form method="post" action="index.php" style="text-align: center">
    <h1>Sing Up</h1>
    <label for="firstName">First Name</label>
    <input type="text" id="firstName" name="firstName" required style="margin: 10px">
    <br>
    <label for="lastName">Last Name</label>
    <input type="text" id="lastName" name="lastName" required style="margin: 10px">
    <br>
    <label for="personsCode">Pers. Code</label>
    <input type="text" id="personsCode" name="personsCode" required style="margin: 10px">
    <br>
    <input type="submit" name="signUp" value="ADD" style="margin: 10px">
</form>
</body>
</html>


