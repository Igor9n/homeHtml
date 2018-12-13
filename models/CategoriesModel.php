<?php
class Cats
{
    public static function getCatList()
    {
        return array_slice(scandir('includes/content/categories'),2);
    }
    public static function getCatId($id)
    {
        return file_get_contents('includes/content/categories/'.$id.'/id.txt');
    }
    public static function getCatName($id)
    {
        return file_get_contents('includes/content/categories/'.$id.'/name.txt');
    }

}