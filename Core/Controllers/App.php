<?php


namespace Core\Controllers;


class App
{
    function __construct()
    {
        add_action('admin_menu',  array (&$this, 'dashboard') );
    }

    static function start(){
        add_option('r_user_discount', 10);
        add_option('exit_discount', 3);
    }
    static function dashboard(){
        add_options_page('page_title', 'menu_title', 8, 'file', 'func');
    }
}