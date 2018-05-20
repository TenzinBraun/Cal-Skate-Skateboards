<?php

$localhost = "localhost";
$dbName = "cal_skate_skateboards";
$username = "root";
$password = "";
$bdd = new PDO("mysql:host=$localhost;dbname=$dbName;charset=utf8",$username,$password);

echo "PASSAGE ";

if(isset($_POST['mail']) && isset($_POST['password'])){
    $email = htmlspecialchars($_POST['mail']);
    $pass = htmlspecialchars($_POST['password']);
    $selectEmailFromDataBase = "SELECT `account_email` FROM account WHERE account_email LIKE '".$email."'";
    $selectPasswordFromDataBase = "SELECT `account_password` FROM account WHERE account_email LIKE '".$email."'";

    try{
        $queryEmail = $bdd->query($selectEmailFromDataBase)->fetchColumn() or die();
        try {
            $queryPassword = $bdd->query($selectPasswordFromDataBase)->fetchColumn() or die();
            if ($queryPassword === $pass) {
                echo "Connected !!!!";
            } else {
                echo "Error ! ";
            }
        }catch(Exception $exception){
            echo "Le mot de passe n'existe pas dans la base de données";
        }
    }catch(Exception $exception){
        echo "L'adresse mail n'existe pas dans la base de données";
    }
}


?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
</head>
<body>
<form action="" method="post">
    <label>
        Email Address<input type="email" name="mail" placeholder="Exemple@mail.com" required>
    </label>
    <label>
        Password<input type="password" name="password" placeholder="Password" required>
    </label>
    <button type="submit" value="Submit">Submit</button>
</form>

</body>
</html>