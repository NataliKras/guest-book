<?php 
    // $arr=array(1,2,3,4,5);
    // $reverse=array_reverse($arr);
    // print_r ($reverse);
    
    require_once "../src/Autoload.php";
    use App\Core\Router;

    $obj= new Router();
    $obj->run();
?>