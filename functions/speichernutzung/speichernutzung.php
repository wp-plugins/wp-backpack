<?php

# Friday, 08/07/2015
# This Code is modified from the Code of WP Plugin WP-Memory-Usage: http://de.wordpress.org/plugins/wp-memory-usage/
# Code Contributors: Alex Rabe
# Author URI: https://profiles.wordpress.org/alexrabe/
# License: GPLv2 or later
# License URI: http://www.gnu.org/licenses/gpl-2.0.html

# Many Thanks to Alex Rabe!

# +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
# Speichernutzung des Blogs anzeigen
# +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

if ( is_admin() ) { 
    
    class ck_memory_usage {
        
        var $memory = false;
        
        function ck_memory_usage() {
            return $this->__construct();
        }

        function __construct() {
            add_action( 'init', array (&$this, 'check_limit') );
            add_action( 'wp_dashboard_setup', array (&$this, 'add_dashboard') );
            add_filter( 'admin_footer_text', array (&$this, 'add_footer') );

            $this->memory = array();                    
        }
        
        function check_limit() {
            $this->memory['limit'] = (int) ini_get('memory_limit') ;
        }
        
        function check_memory_usage() {
            
            $this->memory['usage'] = function_exists('memory_get_usage') ? round(memory_get_usage() / 1024 / 1024, 2) : 0;
            
            if ( !empty($this->memory['usage']) && !empty($this->memory['limit']) ) {
                $this->memory['percent'] = round ($this->memory['usage'] / $this->memory['limit'] * 100, 0);
                # If the bar is tp small we move the text outside
                $this->memory['percent_pos'] = '';
                # In case we are in our limits take the admin color 
                $this->memory['color'] = '';
                if ($this->memory['percent'] > 80) $this->memory['color'] = 'background: #E66F00;';
                if ($this->memory['percent'] > 95) $this->memory['color'] = 'background: red;';
                if ($this->memory['percent'] < 10) $this->memory['percent_pos'] = 'margin-right: -30px; color: #444;';
            }       
        }
        
        function dashboard_output() {
            
            $this->check_memory_usage();
            
            $this->memory['limit'] = empty($this->memory['limit']) ? __('N/A') : $this->memory['limit'] . __(' MB');
            $this->memory['usage'] = empty($this->memory['usage']) ? __('N/A') : $this->memory['usage'] . __(' MB');
            
            ?>
                <ul>    
                    <li><strong><?php _e('aktuelle PHP Version'); ?></strong> : <span><?php echo PHP_VERSION; ?>&nbsp;/&nbsp;<?php echo (PHP_INT_SIZE * 8) . __('Bit OS'); ?></span></li>
                    <li><strong><?php _e('Speichergrenze'); ?></strong> : <span><?php echo $this->memory['limit']; ?></span></li>
                    <li><strong><?php _e('Speichernutzung'); ?></strong> : <span><?php echo $this->memory['usage']; ?></span></li>
                </ul>
                <?php if (!empty($this->memory['percent'])) : ?>
                <div class="progressbar">
                    <div style="border:1px solid #DDDDDD; background-color:#F9F9F9; border-color: rgb(223, 223, 223); box-shadow: 0px 1px 0px rgb(255, 255, 255) inset; border-radius: 3px;">
                        <div class="button-primary" style="width: <?php echo $this->memory['percent']; ?>%;<?php echo $this->memory['color'];?>padding: 0px;border-width:0px; color:#FFFFFF;text-align:right; border-color: rgb(223, 223, 223); box-shadow: 0px 1px 0px rgb(255, 255, 255) inset; border-radius: 3px; margin-top: -1px;">
                            <div style="padding:2px;<?php echo $this->memory['percent_pos']; ?>"><?php echo $this->memory['percent']; ?>%</div>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
            <?php
        }
         
        function add_dashboard() {
            wp_add_dashboard_widget( 'wp_memory_dashboard', 'Übersicht Speichernutzung', array (&$this, 'dashboard_output') );
        }
        
        function add_footer($content) {
            
            $this->check_memory_usage();
    
            $content .= ' | Speicher : ' . $this->memory['usage'] . ' von ' . $this->memory['limit'];
            
            return $content;
        }

    }

    # Start this plugin once all other plugins are fully loaded
    add_action( 'plugins_loaded', create_function('', '$memory = new ck_memory_usage();') );
}

?>