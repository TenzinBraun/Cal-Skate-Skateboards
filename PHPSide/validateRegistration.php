<?php
require_once('Controller/DBManager.php');

$dbManager = new DBManager();
$register = $dbManager->addRegistrationToBD($_POST['firstName'], $_POST['name'], $_POST['day'],
    $_POST['month'], $_POST['year'], $_POST['emailAddress'], $_POST['password'],
    $_POST['confirmPassword']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cal-Skate-Skateboards</title>
</head>
<body>

<?php
    echo $register;
?>

</body>
</html>