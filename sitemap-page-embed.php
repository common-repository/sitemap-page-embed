<?php
/*
Plugin Name: Sitemap Page Embed
Plugin URI: http://wordpresshowtos.blogspot.com/2015/10/sitemap-page-embed.html
Description: Sitemap Page Embed plugin adds the sitemap of your site anywhere on a page through tinymce button or using a simple shortcode [spe_sitemap_shortcode]. 
Author: Pluspt2001
Version: 1.5
Author URI: http://wordpresshowtos.blogspot.com/2015/10/sitemap-page-embed.html
Text Domain: sitemap-page-embed
Domin Path: Languages
License: GPLV2

Copyright 2015 ZEESHANASLAMDURRANI (email : zeeshanaslamdurrani@mailfence.com)
This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.
This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA 02110-1301 USA
*/

/*******************
* Global Variables 
*******************/

$spe_prefix = 'spe';
$spe_plugin_name = 'Sitemap Page Embed';

/*******************
* includes 
*******************/

$dir = plugin_dir_path( __FILE__ );

include($dir.'includes/spe_data-processing.php'); // to execute filter for sitemap

/*****************
* Translation
******************/

load_plugin_textdomain('sitemap-page-embed', false, basename(dirname( __FILE__ ) ) . '/languages' );




?>
