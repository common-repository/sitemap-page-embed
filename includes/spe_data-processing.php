<?php

/****************************
* Sitemap Page Embed
****************************/

add_shortcode('spe_sitemap_shortcode','spe_sitemap_shortcode');
 
function spe_sitemap_shortcode(){
	ob_start();
	$output = ob_get_clean();

    return "<ul>".wp_list_pages('title_li=&echo=0')."</ul>".$output;
	ob_end_clean();
}

/////////////////////////////////////////////////////
// initialize register button
 add_action('init', 'spe_shortcode_button_init');
 
 function spe_shortcode_button_init() {

      //Abort early if the user will never see TinyMCE
      if ( ! current_user_can('edit_posts') && ! current_user_can('edit_pages') && get_user_option('rich_editing') == 'true')
           return;

      //Add a callback to regiser our tinymce plugin   
      add_filter("mce_external_plugins", "spe_register_tinymce_plugin"); 

      // Add a callback to add our button to the TinyMCE toolbar
      add_filter('mce_buttons', 'spe_add_tinymce_button');
}


//This callback registers our plug-in
function spe_register_tinymce_plugin($plugin_array) {
    $plugin_array['spe_button'] = (plugin_dir_url( __FILE__ ).'js/spe_shortcode.js');
    return $plugin_array;
}

//This callback adds our button to the toolbar
function spe_add_tinymce_button($buttons) {
            //Add the button ID to the $button array
    $buttons[] = "spe_button";
    return $buttons;
}



?>