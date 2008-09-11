=== Noindex nofollow archives ===
Tags: archives, noindex, nofollow
Requires at least: 2.6
Tested up to: 2.6
Stable tag: trunk

This plugin adds rel="noindex,nofollow" to archive links.

== Installation ==
1. Upload `noindex_archive` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress

== Frequently Asked Questions ==

= Can I just do noindex, or just nofollow? =

Yes, just edit noindex_archive.php. Take out which ever one you don't want from the following line:
	$text = preg_replace( '/<a([^>]+)>/', '<a$1 rel="noindex,nofollow">', $text );
Be sure to remove the comma as well.