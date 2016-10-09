<?php

class App
{
    protected $controller = 'home';
    protected $method = 'index';
    protected $params = [];
// by default we are considering /public/controller/methodname
//as soon as the directory is written on the address bar the first arg is controller , 2nd is method and the
// others are parameters
    public function __construct()
    {
         $url = $this->parseUrl();
         if(file_exists('../app/controllers/'. $url[0].'.php'))
         {
           $this->controller= $url[0];
           unset($url[0]); //remove fromm array
         }//this if was to check whether the entered controller exists or not, if exists controller is set to the controllers name
         //or home is the default controller
         require_once '../app/controllers/'. $this->controller.'.php';
         $this->controller= new $this->controller;// create object instance of that controller
         if(isset($url[1]))
         {
           if(method_exists($this->controller, $url[1]))
           {
             $this->method = $url[1];
             unset($url[1]);
           }
         }
         $this->params= $url ? array_values($url) : [];
         call_user_func_array([$this->controller,$this->method], $this->params);
    }
    public function parseUrl()
    {
      if(isset($_GET['url'])){
        return $url = explode('/',filter_var(rtrim($_GET['url'],'/'),FILTER_SANITIZE_URL));
      }
    }
}

 ?>
