<?php
declare(strict_types=1);

class product_controller
{
    public function render(array $GET, array $POST)
    {
        $ldr = new productLoader;
        $products = $ldr->getAll();
        $title = "Product overview";

        require 'view/includes/header.php';
        require 'view/product_list.php';
        require 'view/includes/footer.php';
    }
}