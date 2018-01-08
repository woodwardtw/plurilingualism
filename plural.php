<?php
/**
 * Plugin Name: pluralingualism - auto-right align Arabic & Hebrew 
 * Plugin URI: https://github.com/woodwardtw/
 * Description: Proof of concept plugin that recognizes Arabic and Hebrew in comments and text and right aligns them. Meant for mixed language sites. Inspired by this post from Sonja Burrows. http://digitallearning.middcreate.net/digital-tools/plurilingualism-and-the-digital/

 * Version: 1.0
 * Author: Tom Woodward
 * Author URI: http://bionicteaching.com
 * License: GPL2
 */
 
 /*   2016 Tom  (email : bionicteaching@gmail.com)
 
    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.
 
    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.
 
    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */
 
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );


function pluralingualism_enqueue_scripts() {
    wp_enqueue_script( 'altlab-getposts-scripts', plugins_url('/js/lineup.js', __FILE__), array( 'jquery' ), '1.0',true );

}
add_action( 'wp_enqueue_scripts', 'pluralingualism_enqueue_scripts' );
