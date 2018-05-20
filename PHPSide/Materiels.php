<?php
/**
 * Created by PhpStorm.
 * User: Martin
 * Date: 10/04/2018
 * Time: 20:56
 */

require_once "Controller/DBManager.php";

$db = new DBManager();

$elements = $db->findElementsfromArticle();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cal Skate Skateboards</title>
    <link href="Bootstrap/CSS/bootstrap.css" rel="stylesheet">
    <link href="Bootstrap/CSS/article.css" rel="stylesheet">
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <?php
        foreach($elements as $element) {
            echo "<div id='placedArticle'>";
            echo "<div id='articleDisplayed'><a href='Article.php?id={$element['id_article']}'><img id='imageArticle'src='{$element['path_article']}'></a></div>";
            echo "</div>";
        }
        ?>
    </div>
</div>
</body>
</html>
