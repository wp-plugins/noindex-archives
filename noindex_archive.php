<?php
/*
Plugin Name: noindex archives
Plugin URI: http://www.johntron.com
Description: Adds "noindex" to archive links
Version: 1.0
Author: John Syrinek
Author URI: http://www.johntron.com

Copyright 2008  John Syrinek  (email : john.syrinek@gmail.com)

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

add_filter( 'get_archives_link', 'filter_category_list' );

function filter_category_list( $text ) {
	$text = preg_replace( '/<a([^>]+)>/', '<a$1 rel="noindex,nofollow">', $text );
	return $text;
}