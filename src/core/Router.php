<?php
namespace App\Core;

use Error;

class Router
    // function __construct($view)
    // {
        
    // }
    // {
    //     $this->controllerName=(isset($_GET["t"] ?? 'site'). 'Controller';
    //     $this->actionName='action'.($_GET["a"]?? 'home');
    // }


{
    function Run()
    {
        // echo "Hello World!";

        $className="App\\Controller\\($this->controllerName)";
        if (class_exists($className)){
            $MVC=new $className();

            if (method_exists($MVC, $this->actionName)){
                $MVC->{$this->actionName}();
            }else{
                //echo "нет такого метода: $this->methodName";
                (new ErrorController())->natFoundAction($this->actionName);             
            }
        }else{
            echo "нет такого класса: $this->controllerName";
            // (new ErrorController())->natFoundController($this->controllerName);
            }
    // }else{
    //     //echo "ошибка доступа";
    //     (new ErrorController())->forbiddenController();
}
}

?>