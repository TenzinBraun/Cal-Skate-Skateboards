<?php
/**
 * Created by PhpStorm.
 * User: Martin
 * Date: 10/04/2018
 * Time: 01:19
 */


include_once "DBManager.php";



class Panier
{
//Attributes
   private $numberOfArticleInBasket;
   private $db;

//Methodes

    public function __construct($numberArticle)
    {
        $this->numberOfArticleInBasket = $numberArticle;
        $this->db = new DBManager();
    }

    public function addArticleToBasket($idAccount, $idArticle){
        if(!$this->db->verifyIfArticleIsAddedInBasket($idAccount, $idArticle, "basket")){
            $this->db->insert2ElementsIntoTable($idAccount,$idArticle,"basket");
            $this->db++;
        }
    }

    public function getArticleFromBasket(){

    }


}