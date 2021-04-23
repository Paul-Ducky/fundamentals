<?php
declare(strict_types=1);

class article_controller
{

    public function render(array $GET, array $POST)
    {

        $ldr = new articleLoader;

        if(isset($GET['action']) && $GET['action'] === 'details')
        {
            try {
                $article = $ldr->getDetailed($GET['article_slug']);
                $title = "Article details";
                require 'view/includes/header.php';
                require 'view/article_details.php';
                require 'view/includes/footer.php';
            }catch (error $e){
                echo $e->getMessage();
            }
        }
        else
            {
                $articles = $ldr->getAll();
                $title = "Article overview";
                require 'view/includes/header.php';
                require 'view/article_list.php';
                require 'view/includes/footer.php';
            }

    }
}