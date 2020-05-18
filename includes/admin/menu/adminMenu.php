<?php
/**
 * Admin menu.
 */
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

if (!class_exists('FP_Admin_Menu')) {

    /**
     * FP_Admin_Menu Class.
     */
    class FP_Admin_Menu {

        public static function init()
        {
            add_action( 'admin_menu', array('FP_Admin_Menu','add_admin_menu') );
        }

        public static function add_admin_menu() {

            add_menu_page(
                __( 'Custom Menu Title', 'fp' ),
                'First Plugin',
                'manage_options',
                'first-plugin-settings',
                array('FP_Admin_Menu','my_custom_menu_page')
            );

            add_submenu_page(
                'first-plugin-settings',
                'BufferCode Submenu',
                'List plugin',
                'manage_options',
                'first-plugin-settings'
            );

            add_submenu_page(
                'first-plugin-settings',
                'BufferCode Submenu 2',
                'Submenu-2',
                'manage_options',
                'submenu-2',
                array('FP_Admin_Menu','submenu_1_page')
            );

        }

        /**
         * Display a custom menu page
         */
        public static function my_custom_menu_page(){
            echo "Edit>>>>>>> 1";
        }

        public static function submenu_1_page()
        {
            echo "Edit>>>>>>>";
        }
    }

    FP_Admin_Menu::init();
}
