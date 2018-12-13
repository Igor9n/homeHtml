<?php
include_once 'models/ItemModel.php';

class Products
{
    public static function getAllItems()
    {
        $items = array();
        foreach (Goods::getItemsList() as $item)
        {
            $items[] = Products::getItemInfo($item);
        }
        return $items;
    }
    public static function getItemInfo($id)
    {
        return [
            'id' => Goods::getItemId($id),
            'catid' => Goods::getCatId($id),
            'name' => Goods::getName($id),
            'characteristics' => Goods::getCharacteristics($id),
            'shortDesc' => Goods::getShortDescription($id),
            'description' => Goods::getDescription($id)
        ];
    }
    public static function getItemView()
    {
        include 'views/ItemView.php';
    }
}