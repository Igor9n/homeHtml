<?php
include_once 'models/CategoriesModel.php';

class Categories
{
    public static function getAllCats()
    {
        $cats = array();
        foreach (Cats::getCatList() as $cat)
        {
            $cats[] = Categories::getCatInfo($cat);
        }
        return $cats;
    }
    public static function getCatInfo($id)
    {
        return [
            'id' => Cats::getCatId($id),
            'name' => Cats::getCatName($id)
        ];
    }
    public static function getCatView()
    {
        include 'views/CategoryView.php';
    }
}