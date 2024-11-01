jQuery(document).ready(function($) {

    tinymce.create('tinymce.plugins.spe_plugin', {
        init : function(ed, url) {
                // Register command for when button is clicked
                ed.addCommand('spe_insert_shortcode', function() {
                    selected = tinyMCE.activeEditor.selection.getContent();
                   
                    if( selected ){
                        //If text is selected when button is clicked
                        //Notify that nothing should be selected when button is clicked
						alert ("Nothing should be selected when button is clicked !!");
                       
                    }
					
					else{
                        content =  '[spe_sitemap_shortcode]';
                    }

                    tinymce.execCommand('mceInsertContent', false, content);
                });

            // Register buttons - trigger above command when clicked
            ed.addButton('spe_button', {title : 'Insert shortcode', cmd : 'spe_insert_shortcode', image: url + '/favicons/spe_sitemap.png' });
        },   
    });

    // Register our TinyMCE plugin
    // first parameter is the button ID1
    // second parameter must match the first parameter of the tinymce.create() function above
    tinymce.PluginManager.add('spe_button', tinymce.plugins.spe_plugin);
});