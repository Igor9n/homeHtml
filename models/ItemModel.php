<?php
class Goods
{
    public $products;
    public static function getItemsList()
    {
        return array_slice(scandir('includes/content/products'),2);
    }
    public static function getCatId($id)
    {
        return file_get_contents('includes/content/products/'.$id.'/catid.txt');
    }
    public static function getItemId($id)
    {
        return file_get_contents('includes/content/products/'.$id.'/id.txt');
    }
    public static function getCharacteristics($id)
    {
        $characteristics = array();
        foreach (explode(',',file_get_contents('includes/content/products/'.$id.'/characteristics.txt')) as $value)
        {
            $characteristics[] = explode('=>',$value);
        }
        return  $characteristics;
    }
    public static function getName($id)
    {
        return file_get_contents('includes/content/products/'.$id.'/name.txt');
    }
    public static function getDescription($id)
    {
        return file_get_contents('includes/content/products/'.$id.'/description.txt');
    }
    public static function getShortDescription($id)
    {
        return file_get_contents('includes/content/products/'.$id.'/shortDesc.txt');
    }
}