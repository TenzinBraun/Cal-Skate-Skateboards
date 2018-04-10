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
</head>
<body>

<?php
foreach($elements as $element) {

    echo "<div id='articleDisplayed'><a href='Article.php?id={$element['id_article']}'><img src='{$element['path_article']}'
    style='width: 100px;height: 100px;'></a></div>";
}
?>

</body>
</html>
