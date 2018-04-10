<?php
/**
 * Created by PhpStorm.
 * User: Martin
 * Date: 09/04/2018
 * Time: 20:57
 */

class DBManager
{
//Methodes
    function __construct(){;}

    public function connexionToDB(){
        $localhost = "localhost";
        $dbName = "cal_skate_skateboards";
        $username = "root";
        $password = "";
        return new PDO("mysql:host=$localhost;dbname=$dbName;charset=utf8",$username,$password);
    }

    public function createAutoIDRegister(){

        $accountID = rand(0,100000000);
        $selectID = "Select Id_account from account";
        $queryID = $this->connexionToDB()->query($selectID);
        while($accountID === $queryID){
            $accountID = rand(0,100000000);
        }
        $queryID->closeCursor();
        return $accountID;
    }

    public function addRegistrationToBD($fName, $name, $day, $month, $year, $email, $password, $confirmPassword){
        $date = "$day".'/'."$month".'/'."$year";
        $autoID = $this->createAutoIDRegister();

        if($password === $confirmPassword) {
            $validatePassword = $password;
            $insert = "INSERT INTO `account`(`Id_account`, `account_first_name`, `account_name`, `account_birthday`, `account_email`, `account_password`) VALUES($autoID,'$fName','$name','$date','$email', '$validatePassword')";
            $query = $this->connexionToDB()->query($insert);
            var_dump($this->connexionToDB());
            $query->closeCursor();
            return $message = "Félicitation ! Vous venez de vous inscrire sur Cal-Skate-Skateboards ! Appreciez vos moments chez nous ! ";
        }
        else{
            return $message = "Les deux mots de passes rentré ne sont pas équivalent";
        }
    }

    public function findElementfromArticleWithIDCondition($element, $condition){
        $selectElement = "SELECT $element FROM article WHERE id_article LIKE $condition";
        $query = $this->connexionToDB()->query($selectElement);
        return $query->fetchColumn();

    }


}