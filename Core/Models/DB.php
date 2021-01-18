<?php


namespace Core\Models;


class DB
{
    function create_plugin_table()
    {
        global $wpdb;
        $t_name = $wpdb->prefix . "discount_table";
        if ($wpdb->get_var("SHOW TABLES LIKE '$t_name'") != $t_name):
            $sql = "CREATE TABLE " . $t_name . " (
              id mediumint(9) NOT NULL AUTO_INCREMENT,
              reg_user int  NOT NULL,
              q_user int NOT NULL,
              UNIQUE KEY id (id)
	        );";
            require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
            dbDelta($sql);
        endif;
    }

    function set_date($reg_percent, $q_percent)
    {
        global $wpdb;
        $t_name = $wpdb->prefix . "discount_table";
        $wpdb->insert($t_name, array('reg_user' => $reg_percent, 'q_user' => $q_percent,));
    }

    function getValue($type)
    {
        global $wpdb;
        $query = "SELECT * FROM `wp_discount_table`";
        $rezult = $wpdb->get_var( $query, $type, 0 );
        return $rezult;
    }
}