<?php

require_once('Controller/DBManager.php');

$database = new DBManager();

if(isset($_GET['id'])){
    $id = $_GET['id'];
    echo "ok";
}
else{
    $id = 0;
}

$path = $database->findElementfromArticleWithIDCondition("path_article",$id);
$description = $database->findElementfromArticleWithIDCondition("description_article",$id);
$price = $database->findElementfromArticleWithIDCondition("price_article",$id);
$disponibility = $database->findElementfromArticleWithIDCondition("disponibility",$id);
$brand = $database->findElementfromArticleWithIDCondition("brand_article",$id);
$comments = $database->findElementfromArticleWithIDCondition("nbre_comment",$id);
$name = $database->findElementfromArticleWithIDCondition("name_article",$id);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cal Skate Skateboards</title>
    <link href="Bootstrap/CSS/bootstrap.css" rel="stylesheet">
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-lg-9">
            <div class="row">
                <!-- Article itself and description -->
                <div class="col-lg-6">
                    <div>
                        <img src="<?php echo $path; ?>" class="img-thumbnail" alt="Responsive image" style="width: 300px; height: 340px;">
                    </div>
                    <div class="p-0 text-left">
                        <h3>Description du produit : </h3> <br/> <br/>
                        <p style="text-align: justify">
                            <?php echo $description; ?>
                        </p>

                    </div>
                </div>

                <!-- Main informations of the Article -->
                <div class="col-lg-6">
                    <h3><?php echo $name; ?></h3> <br/>
                    <h3><?php echo $brand; ?></h3> <br/>
                    <h4>Nombre de commentaires : <?php echo $comments; ?></h4>
                    <h4>Disponibilité : <?php echo $disponibility; ?></h4>
                    <div class="dropdown-divider"></div>
                    <div class="d-block">Price : <?php echo $price; ?></div>
                    <form>
                        <label>
                            <input type="radio">S
                        </label> <br/>
                        <label>
                            <input type="radio">M
                        </label><br/>
                        <label>
                            <input type="radio">L
                        </label><br/>
                        <label>
                            <input type="radio">XL
                        </label>
                    </form>
                    <div>
                        <h3>Ajouter au favoris</h3>
                    </div>
                    <div>
                        <button type="button" class="btn">Ajouter au panier</button>
                    </div>
                    <div>
                        <br/>
                        <br/>
                        <br/>
                        <h2>Information Livraison</h2>
                        <br/>
                        <br/>
                        <br/>
                    </div>
                </div>
            </div>
            <hr>
            <hr>
        </div>

        <!-- Article link with the one we clicked on -->
        <div class="col-lg-3">
            <div>
                <h3>Produit de la même Marque/Similaire</h3>
            </div>
        </div>
    </div>
</div>

</body>
</html>