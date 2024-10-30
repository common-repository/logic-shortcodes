=== Plugin Name ===
Contributors: samueldiethelm
Tags: conditional, logic, postmeta, term, taxonomy
Requires at least: 2.5.0
Tested up to: 5.4
License: GPLv3
License URI: http://www.gnu.org/licenses/gpl-3.0.html

Use shortcodes for conditional logic based on post meta or taxonomy terms.

== Description ==

This plugin enables the use of [if] shortcodes to work with conditional logic based on the existence of post meta or taxonomy terms on posts and pages.

Please consider taking a minute to rate the plugin or let me know any feature request. Thanks!

= Taxonomy =

With conditional logic for taxonomy terms, you can use names, slugs or term_ids:

*	[if taxonomy="category" slug="cars"]Content to show[/if]
*	[if taxonomy="category" name="Cars"]Content to show[/if]
*	[if taxonomy="category" id="123"]Content to show[/if]

= Post Meta =

Post meta (or custom field) logic can be used to check if a certain meta_key AND meta_value combination are present or just a meta_key:

*	[if postmeta="car_model"]Content to show if car model info is present[/if]
*	[if postmeta="car_model" value="Tesla Model S"]Content to show if car model is Tesla Model S[/if]

== Installation ==

1. Upload the plugin files to the `/wp-content/plugins/` directory, or install the plugin through the WordPress plugins screen directly.
1. Activate the plugin through the 'Plugins' screen in WordPress

== Frequently Asked Questions ==

= Where can I use the logic? =

Anywhere where shortcodes are accepted and a post or page is being displayed.

== Changelog ==

= 1.0 =
* Initial upload
