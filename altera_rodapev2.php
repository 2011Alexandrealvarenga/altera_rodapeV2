<?php 
/*
Plugin Name: Alterar Rodape v2
Plugin URI: www.alexandre.com
Description: Alterar Rodape
Version: 1.0
Author: alexandre
Author URI: www.alexandre.com
License: GLPV2
Text Domain: primeiro plugin
*/

function meu_plugin_altera_rodape(){
    echo "meu primeiro plugin Alexandre -";
}

add_action('wp_footer','meu_plugin_altera_rodape');
