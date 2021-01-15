<?php
//spl_autoload_register(function ($class_name) {
//    $plugin_dir =  plugin_dir_path(__FILE__);
//    $str = $plugin_dir.$class_name . '.php';
//    $str = str_replace("\\", "/", $str);
////    echo $str;
//    require_once ($str);
//});

function getPatch($type, $class)
{
    $patches = array(
        'controllers' => 'Core/Controllers/',
        'models' => 'Core/Models/',
        'views' => 'Core/Views/'
    );
    if ($type === "v"):
        $req = plugin_dir_path(__FILE__) . $patches['views'] . $class . '.php';
        $str = str_replace("\\", "/", $req);
        return $str;
    elseif ($type === "c"):
        $req = plugin_dir_path(__FILE__) . $patches['controllers'] . $class . '.php';
        $str = str_replace("\\", "/", $req);
        return $str;
    elseif ($type === "m"):
        $req = plugin_dir_path(__FILE__) . $patches['models'] . $class . '.php';
        $str = str_replace("\\", "/", $req);
        return $str;
    else:
        exit("Путь не найден");
    endif;
}
$str = getPatch('c', 'App');
require_once $str;