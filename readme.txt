=== K2 Hook Up ===
Contributors: xenlab
Donate link: http://xentek.net/code/wordpress/plugins/k2-hook-up/
Tags: k2, content, theme, themes, template, custom, css, html, javascript, formatting, style, snippets, code
Requires at least: 2.5
Tested up to: 2.9
Stable tag: trunk

Be prepared to get hooked up! This plugin allows you to insert any content you want into the custom hooks added by the K2 theme. K2-RC6+ is required.

== Description ==

The K2 theme provides a number of additional hooks into the template. If you’re handy with PHP you can easily add any manner of arbitrary content to these 8 regions. For everyone else, there is K2 Hook Up.

This plugin provides an options screen with each unique hook exposed as a simple text box. Insert any HTML, CSS, JavaScript, or PHP that you like, and click submit and it will be instantly published to that region of your template.

== Installation ==

1. Download the k2-hook-up.zip file, unzip and upload the whole directory to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress.
1. Paste HTML, CSS, JavaScript and/or PHP into one of the input boxes provided on the K2 Hook Up options page, and click `Update Options`.
1. If you include PHP code, be sure to wrap it in PHP tags, and check off the option under that input box to enable it to execute your code.
1. Revel in the glory of your customized blog!

== Frequently Asked Questions ==

= Why Would I Want This? =

If you use the [K2 theme](http://getk2.com/), you'll want this. This plugin will allow you to insert arbitrary content in any place you see the hooks. Great for adding javascript widgets, advertising, bits of text, and other code in places that you can't reach with just a custom CSS File or the K2 Sidebar Manager.

= Which version of K2 do I need? =

At least K2-RC6. Versions prior to this did not include the hooks necessary for this plugin to work. Use the [latest nightly](http://getk2.com/nightly), to ensure that all of the hooks presented will be available in your theme.

= Does this work with K2 child themes? =

Yes. For more information on K2 child themes, [check the wiki](http://code.google.com/p/kaytwo/wiki/K2ChildThemes).

= Can I paste in PHP code? =

As of v1.0, the plugin has an option next to each hook's input box to indicate if the content contains PHP or not. Just be sure to enclose your content in the proper tags: `<?php // your code goes here  ?>`. Code output that you want to see should be done via [print](http://php.net/print) or [echo](http://php.net/echo).

= I think I'm doing it wrong. I put in some PHP code, checked the box, and saved it, but now nothing is showing up for that Hook, including the plain jane HTML that I put in there, too. =

Make sure there aren't any PHP errors being generated by your code. If any of your code errors, it won't be able to finish parsing it.

= What if I don't use K2? Can I still make use of this plugin? =

Sure! Just implement the [same hooks that K2 uses](http://code.google.com/p/kaytwo/wiki/K2CSSandCustomCSS) in your theme files, and the plugin will happily work its magic. In fact, I think that all themes should implement these hooks as a matter of standard practice.

Let me know if you implement these hooks in your theme so I can link to you.

= I can't find where to configure this plugin! =

Its filed under the 'Design' tab, next to the other K2 option pages. It seemed to be the most logical place for it. Earlier versions filed it under the Settings tab.

= I want to help with development of this Plugin! =

The project is now hosted on [github.com](http://github.com/xentek/k2-hook-up). Just fork the project and send me a pull request.

[New to git?](http://delicious.com/ericmarden/git)

== Changelog ==

= 1.4.2 =
* Fixed the 'Configure Settings' link in the plugin header so that it wasn't hardcoded to a specific location of wp-admin.

= 1.4 =
* Fixed an issue with the saving of template_primary_begin and template_primary_end hooks.

== Screenshots ==

1. Partial view of the K2 Hook Up options screen.

== License ==

The K2 Hook Up plugin was developed by Eric Marden, and is provided with out warranty under the GPLv2 License. More info and other plugins at: http://xentek.net

Copyright 2008  Eric Marden  (email : wp@xentek.net)

This program is free software; you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation; either version 2 of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more details.

You should have received a copy of the GNU General Public License along with this program; if not, write to the Free Software Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA