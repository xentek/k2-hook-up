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
$path = PLUGINDIR.'/'.dirname(plugin_basename(__FILE__));

if ( !empty($_POST ) ) :
	update_option('k2hookup_template_body_top',$_POST['k2hookup_template_body_top']);
	update_option('k2hookup_template_before_header',$_POST['k2hookup_template_before_header']);
	update_option('k2hookup_template_header',$_POST['k2hookup_template_header']);
	update_option('k2hookup_template_header_menu',$_POST['k2hookup_template_header_menu']);
	update_option('k2hookup_template_before_content',$_POST['k2hookup_template_before_content']);
	update_option('k2hookup_template_after_content',$_POST['k2hookup_template_after_content']);
	update_option('k2hookup_template_before_footer',$_POST['k2hookup_template_before_footer']);
	update_option('k2hookup_template_footer',$_POST['k2hookup_template_footer']);
	
	if (!isset($_POST['k2hookup_template_body_top_php'])) {
		$_POST['k2hookup_template_body_top_php'] = 0;
	}
  
	if (!isset($_POST['k2hookup_template_before_header_php'])) {
		$_POST['k2hookup_template_before_header_php'] = 0;
	}

	if (!isset($_POST['k2hookup_template_header_php'])) {
		$_POST['k2hookup_template_header_php'] = 0;
	}

	if (!isset($_POST['k2hookup_template_header_menu_php'])) {
		$_POST['k2hookup_template_header_menu_php'] = 0;
	}

	if (!isset($_POST['k2hookup_template_before_content_php'])) {
		$_POST['k2hookup_template_before_content_php'] = 0;
	}

	if (!isset($_POST['k2hookup_template_after_content_php'])) {
		$_POST['k2hookup_template_after_content_php'] = 0;
	}

	if (!isset($_POST['k2hookup_template_before_footer_php'])) {
		$_POST['k2hookup_template_before_footer_php'] = 0;
	}

	if (!isset($_POST['k2hookup_template_footer_php'])) {
		$_POST['k2hookup_template_footer_php'] = 0;
	}
	
	update_option('k2hookup_template_body_top_php',$_POST['k2hookup_template_body_top_php']);
	update_option('k2hookup_template_before_header_php',$_POST['k2hookup_template_before_header_php']);
	update_option('k2hookup_template_header_php',$_POST['k2hookup_template_header_php']);
	update_option('k2hookup_template_header_menu_php',$_POST['k2hookup_template_header_menu_php']);
	update_option('k2hookup_template_before_content_php',$_POST['k2hookup_template_before_content_php']);
	update_option('k2hookup_template_after_content_php',$_POST['k2hookup_template_after_content_php']);
	update_option('k2hookup_template_before_footer_php',$_POST['k2hookup_template_before_footer_php']);
	update_option('k2hookup_template_footer_php',$_POST['k2hookup_template_footer_php']);
?>
<div id="message" class="updated fade"><p><strong><em><?php _e("You've got a pretty good looking blog there.",'k2hookup'); ?></em> <?php _e('Options Saved!','k2hookup'); ?></strong></p></div>
<?php endif;
$k2hookup_template_body_top_php = get_option('k2hookup_template_body_top_php');
$k2hookup_template_before_header_php = get_option('k2hookup_template_before_header_php');
$k2hookup_template_header_php = get_option('k2hookup_template_header_php');
$k2hookup_template_header_menu_php = get_option('k2hookup_template_header_menu_php');
$k2hookup_template_before_content_php = get_option('k2hookup_template_before_content_php');
$k2hookup_template_after_content_php = get_option('k2hookup_template_after_content_php');
$k2hookup_template_before_footer_php = get_option('k2hookup_template_before_footer_php');
$k2hookup_template_footer_php = get_option('k2hookup_template_footer_php');
?>
<script type="text/javascript" src="/<?php echo $path; ?>/jquery.textarearesizer.compressed.js"></script>
<script type="text/javascript">
	/* jQuery textarea resizer plugin usage */
	jQuery(document).ready(function() {
		jQuery('textarea.resizable:not(.processed)').TextAreaResizer();
	});
</script>
<style type="text/css" media="screen">
<!--
	label.head {
		display: block;
		font-weight: bold;
		font-size: 120%;
		margin-bottom: 5px;
		width: 720px;
		padding: 5px;
	}
	
	label.small {
		font-weight: bold;
		font-size: 80%;
	}

	p.hook {
		border-bottom: 1px solid #ebebeb;
		margin-bottom: 10px;
		padding: 20px;
	}

	p.info {
		border-top: 1px solid #ebebeb;
	}

	
	small {
		font-weight: bold;
	}
	
	div.grippie {
		background: #EEEEEE url(/<?php echo $path; ?>/grippie.png) no-repeat scroll center center;
		border-color: #DDDDDD;
		border-style: solid;
		border-width: 0 1px 1px;
		cursor: s-resize;
		height: 9px;
		overflow: hidden;
	}
	
	.resizable-textarea textarea {
		display: block;
		margin-bottom: 0;
		font-family: monospace;
		height: 50px;
	}
	
-->
</style>
<div class="wrap">
	<h2><?php _e('K2 Hook Up','k2hookup'); ?></h2>
	<p><?php _e('Be prepared to get hooked up! This plugin allows you to insert any content you want into any of the custom hooks added by the K2 theme. K2-RC6+ is required.','k2hookup')?> <?php _e('The hook names are pretty self explanatory, but if you need more help determining where they show up in your mark-up,','k2hookup');?> <a href="http://code.google.com/p/kaytwo/wiki/K2CSSandCustomCSS" title="<?php _e('K2 Customizations','k2hookup'); ?>"><?php _e('check the wiki','k2hookup'); ?></a>.</p>
	<p><?php _e('More Questions? Check the ','k2hookup'); ?><a href="http://wordpress.org/extend/plugins/k2-hook-up/faq/" title="<?php _e('Frequently Asked Questions','k2hookup'); ?>"><?php _e('FAQ','k2hookup'); ?></a> <?php _e('or','k2hookup'); ?> <a href="http://xentek.net/code/wordpress/plugins/k2-hook-up/" tilte="<?php _e('Get Support with this Plugin','k2hookup'); ?>"><?php _e('get support','k2hookup'); ?></a>.</p>
	<p class="hook info"><strong><?php _e('Insert any HTML, CSS, JavaScript or PHP you like.','k2hookup'); ?></strong>
	<br /><small><?php _e('Your PHP code must be surrounded in PHP tags and you have to enable the Execute PHP option for each hook separately.','k2hookup'); ?></small>
	</p>
	

	<form method="post" action="" id="k2hookup-settings">
		<?php wp_nonce_field('update-options'); ?>
		<input type="hidden" name="action" value="update" />
		<input type="hidden" name="page_options" value="k2hookup_template_body_top" />
		<input type="hidden" name="page_options" value="k2hookup_template_before_header" />
		<input type="hidden" name="page_options" value="k2hookup_template_header" />
		<input type="hidden" name="page_options" value="k2hookup_template_header_menu" />
		<input type="hidden" name="page_options" value="k2hookup_template_before_content" />
		<input type="hidden" name="page_options" value="k2hookup_template_after_content" />
		<input type="hidden" name="page_options" value="k2hookup_template_before_footer" />
		<input type="hidden" name="page_options" value="k2hookup_template_footer" />

		<input type="hidden" name="page_options" value="k2hookup_template_body_top_php" />
		<input type="hidden" name="page_options" value="k2hookup_template_before_header_php" />
		<input type="hidden" name="page_options" value="k2hookup_template_header_php" />
		<input type="hidden" name="page_options" value="k2hookup_template_header_menu_php" />
		<input type="hidden" name="page_options" value="k2hookup_template_before_content_php" />
		<input type="hidden" name="page_options" value="k2hookup_template_after_content_php" />
		<input type="hidden" name="page_options" value="k2hookup_template_before_footer_php" />
		<input type="hidden" name="page_options" value="k2hookup_template_footer_php" />


		<p class="hook">
			<label class="head" for="k2hookup_template_body_top">Body Top:</label>
			<textarea class="resizable" id="k2hookup_template_body_top" name="k2hookup_template_body_top" rows="6" cols="88"><?php echo stripslashes(get_option('k2hookup_template_body_top')); ?></textarea>
			<br />
			<input <?php if ($k2hookup_template_body_top_php) { echo 'checked="checked"'; } ?> type="checkbox" value="1" name="k2hookup_template_body_top_php" id="k2hookup_template_body_top_php" /> <label for="k2hookup_template_body_top_php" class="small"><?php _e('Execute PHP on this hook?','k2hookup'); ?></label>
		</p>

		<p class="hook">
			<label class="head" for="k2hookup_template_before_header">Before Header:</label>
			<textarea class="resizable" id="k2hookup_template_before_header" name="k2hookup_template_before_header" rows="6" cols="88"><?php echo stripslashes(get_option('k2hookup_template_before_header')); ?></textarea>
			<br />
			<input <?php if ($k2hookup_template_before_header_php) { echo 'checked="checked"'; } ?> type="checkbox" value="1" name="k2hookup_template_before_header_php" id="k2hookup_template_before_header_php" /> <label for="k2hookup_template_before_header_php" class="small"><?php _e('Execute PHP on this hook?','k2hookup'); ?></label>
		</p>

		<p class="hook">
			<label class="head" for="k2hookup_template_header">Header:</label>
			<textarea class="resizable" id="k2hookup_template_header" name="k2hookup_template_header" rows="6" cols="88"><?php echo stripslashes(get_option('k2hookup_template_header')); ?></textarea>
			<br />
			<input <?php if ($k2hookup_template_header_php) { echo 'checked="checked"'; } ?> type="checkbox" value="1" name="k2hookup_template_header_php" id="k2hookup_template_header_php" /> <label for="k2hookup_template_header_php" class="small"><?php _e('Execute PHP on this hook?','k2hookup'); ?></label>
		</p>

		<p class="hook">
			<label class="head" for="k2hookup_template_header_menu">Header Menu:</label>
			<textarea class="resizable" id="k2hookup_template_header_menu" name="k2hookup_template_header_menu" rows="6" cols="88"><?php echo stripslashes(get_option('k2hookup_template_header_menu')); ?></textarea>
			<br />
			<input <?php if ($k2hookup_template_header_menu_php) { echo 'checked="checked"'; } ?> type="checkbox" value="1" name="k2hookup_template_header_menu_php" id="k2hookup_template_header_menu_php" /> <label for="k2hookup_template_header_menu_php" class="small"><?php _e('Execute PHP on this hook?','k2hookup'); ?></label>
			<small><?php _e('Insert new menu links, wrapped in &lt;li&gt; tags','k2hookup'); ?></small>
		</p>


		<p class="hook">
			<label class="head" for="k2hookup_template_before_content">Before Content:</label>
			<textarea class="resizable" id="k2hookup_template_before_content" name="k2hookup_template_before_content" rows="6" cols="88"><?php echo stripslashes(get_option('k2hookup_template_before_content')); ?></textarea>
			<br />
			<input <?php if ($k2hookup_template_before_content_php) { echo 'checked="checked"'; } ?> type="checkbox" value="1" name="k2hookup_template_before_content_php" id="k2hookup_template_before_content_php" /> <label for="k2hookup_template_before_content_php" class="small"><?php _e('Execute PHP on this hook?','k2hookup'); ?></label>
		</p>

		<p class="hook">
			<label class="head" for="k2hookup_template_after_content">After Content:</label>
			<textarea class="resizable" id="k2hookup_template_after_content" name="k2hookup_template_after_content" rows="6" cols="88"><?php echo stripslashes(get_option('k2hookup_template_after_content')); ?></textarea>
			<br />
			<input <?php if ($k2hookup_template_after_content_php) { echo 'checked="checked"'; } ?> type="checkbox" value="1" name="k2hookup_template_after_content_php" id="k2hookup_template_after_content_php" /> <label for="k2hookup_template_after_content_php" class="small"><?php _e('Execute PHP on this hook?','k2hookup'); ?></label>
		</p>

		<p class="hook">
			<label class="head" for="k2hookup_template_before_footer">Before Footer:</label>
			<textarea class="resizable" id="k2hookup_template_before_footer" name="k2hookup_template_before_footer" rows="6" cols="88"><?php echo stripslashes(get_option('k2hookup_template_before_footer')); ?></textarea>
			<br />
			<input <?php if ($k2hookup_template_before_footer_php) { echo 'checked="checked"'; } ?> type="checkbox" value="1" name="k2hookup_template_before_footer_php" id="k2hookup_template_before_footer_php" /> <label for="k2hookup_template_before_footer_php" class="small"><?php _e('Execute PHP on this hook?','k2hookup'); ?></label>
		</p>

		<p class="hook">
			<label class="head" for="k2hookup_template_footer">Footer:</label>
			<textarea class="resizable" id="k2hookup_template_footer" name="k2hookup_template_footer" rows="6" cols="88"><?php echo stripslashes(get_option('k2hookup_template_footer')); ?></textarea>
			<br />
			<input <?php if ($k2hookup_template_footer_php) { echo 'checked="checked"'; } ?> type="checkbox" value="1" name="k2hookup_template_footer_php" id="k2hookup_template_footer_php" /> <label for="k2hookup_template_footer_php" class="small"><?php _e('Execute PHP on this hook?','k2hookup'); ?></label>
		</p>

		<div class="tablenav">
			<div class="alignleft"><input type="submit" name="submit" value="<?php _e('Update Options »', 'k2hookup') ?>" class="button-secondary" /></div>
			<div class="alignright"><a href="http://xentek.net/?utm_source=plugin&amp;utm_medium=options&amp;utm_content=icon&amp;utm_campaign=k2hookup" title="visit xentek.net - creator of this plugin"><img src="http://xentek.net/img/icons/recruiter_32.png" width="52" height="32" alt="bullhorn icon" title="visit xentek.net - creator of this plugin" border="0" valign="middle" /></a></div>
		</div>

	</form>	                      
</div>