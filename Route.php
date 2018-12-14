<?php

var_dump($_SERVER);
$arr = explode('/',$_SERVER['REQUEST_URI']);
echo $arr['0'];

class Route
{
    public $request;
    public $controller;
    public $action;
    public $cobj;


    public function __construct()
    {
        $this->controller = $this->request[0];
        $this->action = $this->request[1];
        switch ($this->controller)
        {
            case 'category':
                switch ($this->action)
                {
                    case 'show':
                        $this->cobj->actionShow();
                        break;
                    default:
                        $this->cobj->actionCategory();
                        break;
                };
                break;
            case 'item':
                $this->cobj->actionItem();
                break;
        }

    }
    public function parseUri()
    {
        $this->request = explode('/',$_SERVER['REQUEST_URI']);
    }
    public function getController()
    {
       echo $this->controller;
    }

}