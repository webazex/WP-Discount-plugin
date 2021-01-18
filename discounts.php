<?php
require_once "authoload.php";
use Core\Controllers\App;
use Core\Models\DB;
/**
 * Plugin Name: Discounts
 * Description: Discounts desc
 * Plugin URI:  webazex.com
 * Author URI:  webazex.com
 * Author:      webazex.com
 * Version:     Версия плагина, например 0.1
 *
 * Text Domain: discounts
 * Domain Path: /lang
 *
 * License:     GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 *
 * Network:    true
 */
function start(){
    App::start();
}
function init(){
    register_activation_hook(__FILE__,'start');
}
add_action( 'plugins_loaded', 'init' );
$a = new App();
$a->getDiscount("");
//add_action( 'plugins_loaded', function (){
//    $a = new App();
//    print_r($a->getPercent());
//} );



