=== Noindex/Nofollow links ===
Tags: noindex, nofollow, archives, tags, categories, links
Requires at least: 2.6
Tested up to: 2.7.1
Stable tag: 2.0
Contributors: John Syrinek

This plugin can add rel="noindex,nofollow" to archive, tag, and category links. You can configure exactly which links should get which attributes.

== Installation ==
1. Upload `noindex_archive` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress

== Frequently Asked Questions ==

= Can I just do noindex, or just nofollow? =

Yes, just edit noindex_nofollow_links.php. Take out which ever one you don't want from the following line:
	$text = preg_replace( '/<a([^>]+)>/', '<a$1 rel="noindex,nofollow">', $text );
Be sure to remove the comma as well.