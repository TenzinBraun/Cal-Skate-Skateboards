<?php
/**
 * Created by PhpStorm.
 * User: Martin
 * Date: 21/05/2018
 * Time: 16:59
 */


include_once "DBManager.php";

class Article
{
    private $db;

    public function __construct()
    {
        $this->db = new DBManager();
    }

    public function addNewArticleInDataBase($name, $brandName , $price, $size, $path, $description){
        $this->db->insertArticleIntoDataBase($name, $brandName , $price, $size, $path, $description);
    }
}