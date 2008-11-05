<?php
/*
		Options page for the K2 Hook Up Plugin
		http://xentek.net/code/wordpress/plugins/k2-hook-up/
*/

/*  Copyright 2008  Eric Marden  (email : wp@xentek.net)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

if ( !empty($_POST ) ) :
	update_option('k2hookup_template_body_top',$_POST['k2hookup_template_body_top']);
	update_option('k2hookup_template_before_header',$_POST['k2hookup_template_before_header']);
	update_option('k2hookup_template_header',$_POST['k2hookup_template_header']);
	update_option('k2hookup_template_before_content',$_POST['k2hookup_template_before_content']);
	update_option('k2hookup_template_after_content',$_POST['k2hookup_template_after_content']);
	update_option('k2hookup_template_before_footer',$_POST['k2hookup_template_before_footer']);
	update_option('k2hookup_template_footer',$_POST['k2hookup_template_footer']);
?>
<div id="message" class="updated fade"><p><strong><?php _e('You got a pretty good looking blog there. (Options Saved)','k2hookup') ?></strong></p></div>
<?php endif; ?>

<style type="text/css" media="screen">
<!--
	label {
		display: block;
		font-weight: bold;
		font-size: 120%;
		border-bottom: 1px solid #ebebeb;
		margin-bottom: 5px;
		width: 720px;
		padding: 5px;
	}

	p.hook {
		border-bottom: 1px solid #ebebeb;
		margin-bottom: 10px;
		padding: 20px;
	}
	
	textarea {
		font-family: monospace;
	}
-->
</style>
<div class="wrap">
	<h2><?php _e('K2 Hook Up','k2hookup'); ?></h2>
	<p><?php _e('Be prepared to get hooked up! This plugin allows you to insert any content you want into any of the custom hooks added by the K2 theme. K2-RC6+ is required.','k2hookup')?></p>
	<p><?php _e('The hook names are pretty self explanatory, but if you need more help determining where they show up in your mark-up, check the wiki:','k2hookup')?><br /><a href="http://code.google.com/p/kaytwo/wiki/K2CSSandCustomCSS" title="<?php _e('K2 Customizations','k2hookup'); ?>"><?php _e('K2 Customization Docs','k2hookup'); ?></a></p>
	<p><?php _e('Insert HTML, CSS, or JavaScript Only.','k2hookup'); ?></p>
	<form method="post" action="" id="k2hookup-settings">
		<?php wp_nonce_field('update-options'); ?>
		<input type="hidden" name="action" value="update" />
		<input type="hidden" name="page_options" value="k2hookup_template_body_top" />
		<input type="hidden" name="page_options" value="k2hookup_template_before_header" />
		<input type="hidden" name="page_options" value="k2hookup_template_header" />
		<input type="hidden" name="page_options" value="k2hookup_template_before_content" />
		<input type="hidden" name="page_options" value="k2hookup_template_after_content" />
		<input type="hidden" name="page_options" value="k2hookup_template_before_footer" />
		<input type="hidden" name="page_options" value="k2hookup_template_footer" />

		<p class="hook">
			<label for="k2hookup_template_body_top">Body Top:</label>
			<textarea id="k2hookup_template_body_top" name="k2hookup_template_body_top" rows="6" cols="88"><?php echo stripslashes(get_option('k2hookup_template_body_top')); ?></textarea>
		</p>

		<p class="hook">
			<label for="k2hookup_template_before_header">Before Header:</label>
			<textarea id="k2hookup_template_before_header" name="k2hookup_template_before_header" rows="6" cols="88"><?php echo stripslashes(get_option('k2hookup_template_before_header')); ?></textarea>
		</p>

		<p class="hook">
			<label for="k2hookup_template_header">Header:</label>
			<textarea id="k2hookup_template_header" name="k2hookup_template_header" rows="6" cols="88"><?php echo stripslashes(get_option('k2hookup_template_header')); ?></textarea>
		</p>

		<p class="hook">
			<label for="k2hookup_template_before_content">Before Content:</label>
			<textarea id="k2hookup_template_before_content" name="k2hookup_template_before_content" rows="6" cols="88"><?php echo stripslashes(get_option('k2hookup_template_before_content')); ?></textarea>
		</p>

		<p class="hook">
			<label for="k2hookup_template_after_content">After Content:</label>
			<textarea id="k2hookup_template_after_content" name="k2hookup_template_after_content" rows="6" cols="88"><?php echo stripslashes(get_option('k2hookup_template_after_content')); ?></textarea>
		</p>

		<p class="hook">
			<label for="k2hookup_template_before_footer">Before Footer:</label>
			<textarea id="k2hookup_template_before_footer" name="k2hookup_template_before_footer" rows="6" cols="88"><?php echo stripslashes(get_option('k2hookup_template_before_footer')); ?></textarea>
		</p>

		<p class="hook">
			<label for="k2hookup_template_footer">Footer:</label>
			<textarea id="k2hookup_template_footer" name="k2hookup_template_footer" rows="6" cols="88"><?php echo stripslashes(get_option('k2hookup_template_footer')); ?></textarea>
		</p>

		<div class="tablenav">
			<div class="alignleft"><input type="submit" name="submit" value="<?php _e('Update Options »', 'k2hookup') ?>" class="button-secondary" /></div>
			<div class="alignright"><a href="http://xentek.net/?utm_source=plugin&amp;utm_medium=options&amp;utm_content=icon&amp;utm_campaign=k2hookup" title="visit xentek.net - creator of this plugin"><img src="http://xentek.net/img/icons/recruiter_32.png" width="52" height="32" alt="bullhorn icon" title="visit xentek.net - creator of this plugin" border="0" valign="middle" /></a></div>
		</div>

	</form>	                      
</div>