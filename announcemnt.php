<?php

/**
 * plugin name: WP Announcement
 * plugin uri: announcement.sharifinfo.com 
 * description: Simple announcemnet showing plugin for wordpress
 * author: wpsharif
 * version: 1.0.0
 * author uri: wpsharif.com
 * text-domain: wp-announcement
 * lisence: GPL V2
 */

 final class Announcement {

    public function __construct(){

        //add_action('plugins_loaded', [$this, 'load_text_domain']);
        $this->define_constants();
        $this->save_userinfo();
        $this->init();
    }

    private function define_constants(){

        define('WACM_VERSION', '1.0.0');
        define('WACM_DIR', plugin_dir_path( __DIR__ ));
        define('WACM_URI', plugin_dir_url( __FILE__ ));
        define('WACM_LANG_DIR', WACM_DIR.'/languages');
    }

    private function save_userinfo(){

        $first_installation = get_option('wacm_install_date');

        if($first_installation){
            return;
        }

        update_option( 'wacm_install_data', time() );
    }

    private function load_text_domain(){

        load_textdomain( 'wacm', WACM_LANG_DIR );
    }

    private function init(){
        
        include WACM_DIR.'wp-announcement/includes/init.php';
    }
 }

 new Announcement();
 
 

