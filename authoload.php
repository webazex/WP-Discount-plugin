<?php
spl_autoload_register(function ($class_name) {
    $plugin_dir =  plugin_dir_path(__FILE__);
    $str = $plugin_dir.$class_name . '.php';
    $str = str_replace("\\", "/", $str);
//    echo $str;
    require_once ($str);
});