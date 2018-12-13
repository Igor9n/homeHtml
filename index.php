<?php
require 'controllers/CategoryController.php';
require 'controllers/ItemController.php';

if (!($_GET))
{
    include 'includes/pages/main.php';
} else
{
    foreach ($_GET as $key => $value)
    {
        switch ($key)
        {
            case 'category':
                Categories::getCatView();
                break;
            case 'item':
                Products::getItemView();
                break;
        }
    }
}

?>
