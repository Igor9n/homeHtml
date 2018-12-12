<?php
include_once 'models/CategoriesModel.php';

class Categories
{
    public static function getAllCats()
    {
        return Cats::$categories;
    }
    public static function getCatName($id)
    {
        return Cats::$categories[$id]['name'];
    }
}