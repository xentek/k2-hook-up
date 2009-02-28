<?php
/*
	Plugin Name: K2 Hook Up
	Plugin URI: http://xentek.net/code/wordpress/plugins/k2-hook-up/
	Description: This plugin allows you to insert arbitrary content into the many hooks that the K2 theme provides. No programming skills required. <a href="/wp-admin/themes.php?page=k2-hook-up/k2-hook-up-options.php">Configure Settings</a> or <a href="http://xentek.net/code/wordpress/plugins/k2-hook-up/">Get Support</a>. <em>Code</em> 
	Version: 1.1.1
	Author: Eric Marden
	Author URI: http://www.xentek.net/
*/
/*  Copyright 2008  Eric Marden  (email : wp@xentek.net)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
add_action('init','k2hookup_load_translation');
add_action('admin_menu', 'add_k2hookup_options_page');

/* K2 Hooks */
add_action('template_body_top','k2hookup_template_body_top');
add_action('template_before_header','k2hookup_template_before_header');
add_action('template_header','k2hookup_template_header');
add_action('template_header_menu', 'k2hookup_template_header_menu');
add_action('template_before_content','k2hookup_template_before_content');
add_action('template_after_content','k2hookup_template_after_content');
add_action('template_before_footer','k2hookup_template_before_footer');
add_action('template_footer','k2hookup_template_footer');

function k2hookup_load_translation()
{
	load_plugin_textdomain('k2hookup', PLUGINDIR.'/'.dirname(plugin_basename(__FILE__)));
}

function add_k2hookup_options_page()
{
	if (function_exists('add_options_page'))
	{
		add_theme_page('K2 Hook Up', 'K2 Hook Up', 10, dirname(__FILE__) . '/k2-hook-up-options.php');
	}
}

function k2hookup_template_body_top()
{
	$val = stripslashes(get_option('k2hookup_template_body_top'));
	if (get_option('k2hookup_template_body_top_php')) {
		ob_start();
		eval("?>$val<?php ");
		$val = ob_get_contents();
		ob_end_clean();
	} 
	echo $val;
}

function k2hookup_template_before_header()
{
	$val = stripslashes(get_option('k2hookup_template_before_header'));
	if (get_option('k2hookup_template_before_header_php')) {
		ob_start();
		eval("?>$val<?php ");
		$val = ob_get_contents();
		ob_end_clean();
	} 
	echo $val;
}

function k2hookup_template_header()
{
	$val = stripslashes(get_option('k2hookup_template_header'));
	if (get_option('k2hookup_template_header_php')) {
		ob_start();
		eval("?>$val<?php ");
		$val = ob_get_contents();
		ob_end_clean();
	} 
	echo $val;
}

function k2hookup_template_header_menu()
{
	$val = stripslashes(get_option('k2hookup_template_header_menu'));
	if (get_option('k2hookup_template_header_menu_php')) {
		ob_start();
		eval("?>$val<?php ");
		$val = ob_get_contents();
		ob_end_clean();
	} 
	echo $val;
}

function k2hookup_template_before_content()
{
	$val = stripslashes(get_option('k2hookup_template_before_content'));
	if (get_option('k2hookup_template_before_content_php')) {
		ob_start();
		eval("?>$val<?php ");
		$val = ob_get_contents();
		ob_end_clean();
	} 
	echo $val;
}

function k2hookup_template_after_content()
{
	$val = stripslashes(get_option('k2hookup_template_after_content'));
	if (get_option('k2hookup_template_after_content_php')) {
		ob_start();
		eval("?>$val<?php ");
		$val = ob_get_contents();
		ob_end_clean();
	} 
	echo $val;
}

function k2hookup_template_before_footer()
{
	$val = stripslashes(get_option('k2hookup_template_before_footer'));
	if (get_option('k2hookup_template_before_footer_php')) {
		ob_start();
		eval("?>$val<?php ");
		$val = ob_get_contents();
		ob_end_clean();
	} 
	echo $val;
}

function k2hookup_template_footer()
{
	$val = stripslashes(get_option('k2hookup_template_footer'));
	if (get_option('k2hookup_template_footer_php')) {
		ob_start();
		eval("?>$val<?php ");
		$val = ob_get_contents();
		ob_end_clean();
	} 
	echo $val;
}

?>