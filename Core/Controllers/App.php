<?php


namespace Core\Controllers;

use Core\Models\DB;
use WC_Product_Simple;

class App
{
    static function start()
    {

        add_option('r_user_discount_def', 10);
        add_option('exit_discount_def', 3);

        self::sql_install();
        add_option('r_user_discount', 10);
        add_option('exit_discount', 3);
    }

    function sql_install()
    {
        $db = new DB();
        $db->create_plugin_table();
        $db->set_date(30, 10);
    }

    static function dashboard()
    {
        add_options_page('page_title', 'menu_title', 8, 'file', 'func');
    }

    function getPercent($quit = false)
    {
        $db = new DB();
        if (is_user_logged_in()):
            $percent = $db->getValue('1');
        elseif ($quit == true):
            $percent = $db->getValue('2');
        else:
            $percent = "not percent";
        endif;
        return $percent;
    }

    function getDiscount($discount)
    {
        if ($discount == "not percent"):
            return "Скидка отсутствует";
        else:
//            $product_id = get_the_ID();
//            $product = wc_get_product( 10 );
//            echo $product->get_sale_price();
        endif;
    }

}