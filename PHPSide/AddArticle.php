<?php
require_once('Controller/Article.php');

$article = new Article();
if(isset($_POST['name']) &&
    isset($_POST['brandName']) &&
    isset($_POST['path']) &&
    isset($_POST['price']) &&
    isset($_POST['description']) &&
    isset($_POST['size'])) {
    $article->addNewArticleInDataBase($_POST['name'], $_POST['brandName'],
        $_POST['price'], $_POST['size'],$_POST['path'], $_POST['description']);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="Bootstrap/CSS/bootstrap.css">
</head>
<body>
<div class="container-fluid">

    <div class="row">

        <div class="col-lg-4"></div>
        <div class="col-lg-4">

            <div class="row">
                <div class="col-lg-1"></div>
                <div class="form-control col-lg-10">
                    <form method="post" action="">
                        <div class="row">
                            <div class="col-lg-2"></div>
                            <div class="col-lg-8">
                                <label class="form-group">
                                    <input type="text" placeholder="Article's Name" name="name" required>
                                </label>

                                <label class="form-group">
                                    <input type="text" placeholder="Brand's Name" name="brandName" required>
                                </label>

                                <label class="form-group">
                                    <input type="text" placeholder="Path Access" name="path" required>
                                </label>

                                <label class="form-group">
                                    <input type="number" placeholder="Price" name="price" required>
                                </label>

                                <label class="form-group">
                                    <textarea type="text" placeholder="Description" name="description" required></textarea>
                                </label>

                                <label class="form-group">
                                    <input type="text" placeholder="Size" name="size" required>
                                </label>

                                <button class="btn-primary" type="submit">Upload Your Article</button>
                            </div>
                            <div class="col-lg-2"></div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-1"></div>
            </div>
        </div>
        <div class="col-lg-4"></div>
    </div>
</div>
</body>
</html>