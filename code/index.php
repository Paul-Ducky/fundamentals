<?php

declare(strict_types=1);

require 'models/Db.php';
require 'models/Article.php';
require 'models/ArticleLoader.php';
require 'models/Product.php';
require 'models/ProductLoader.php';
require 'controllers/article_controller.php';
require 'controllers/product_controller.php';


if (!empty($_GET['page']))
{
    if ($_GET['page'] === 'products')
    {
        $c = new product_controller();
        $c->render($_GET, $_POST);
    }
    if($_GET['page'] === 'articles')
    {
        $c = new article_controller();
        $c->render($_GET, $_POST);
    }
}else
    {
        $title = 'Homepage';
        require 'view/homepage.php';
    }
