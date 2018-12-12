<?php
include_once 'models/ItemModel.php';

class Products
{
    public static function getAll()
    {
        return Goods::$products;
    }
    public static function getInfoById($id)
    {
        return Goods::$products[$id];
    }
    public static function getDataById($id)
    {
        return Goods::$products[$id]['characteristics'];
    }
    public static function getNameById($id)
    {
        return Goods::$products[$id]['name'];
    }
    public static function getDescriptionById($id)
    {
        return Goods::$products[$id]['description'];
    }
    public static function getShortDescriptionById($id)
    {
        return Goods::$products[$id]['shortDesc'];
    }
    public static function getItemView()
    {
        include 'views/ItemView.php';
    }
}