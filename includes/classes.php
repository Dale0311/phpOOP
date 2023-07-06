<?php 
    spl_autoload_register('autoLoader');
    function autoLoader($classname){
    $extension = ".class.php";
    if(strpos($_SERVER['REQUEST_URI'], "includes")>0){
        $path = "../classes/";
    }else{
        $path = "classes/";
    }
    $fullpath = $path. $classname. $extension;
    require $fullpath;
}
?>