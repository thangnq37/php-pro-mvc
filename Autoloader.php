<?php 

function autoload($class){
    $paths = explode(PATH_SEPARATOR, $_SERVER['DOCUMENT_ROOT'].$_SERVER['REQUEST_URI']);
    $flags = PREG_SPLIT_NO_EMPTY | PREG_SPLIT_DELIM_CAPTURE;
    $file = strtolower(str_replace("\\","/",trim($class, "\\"))).".php";
    foreach ($paths as $path)
    {
        $combined = $path.DIRECTORY_SEPARATOR.$file;

        if (file_exists($combined))
        {
            include $combined;
            return true;
        }
    }
    try{
        $combined = "D:\Project\KoCham\LearnPHP\MVC".DIRECTORY_SEPARATOR.$file;
        if (file_exists($combined))
        {
            include $combined;
            return;
        }
    }catch(Exception $er){
        throw new Exception("{$class} not found");
    }
    // echo "{$class} not found";
}

class Autoloader{
    public static function autoload($class){
        autoload($class);
    }
}

spl_autoload_register('autoload');
spl_autoload_register(array('autoloader', 'autoload'));