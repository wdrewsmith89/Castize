<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------
|  Load theme meta file
| -------------------------------------------------------------------
*/
if(!function_exists('get_meta')) {
	function get_meta() {
		get_instance()->plate->meta();
	}
}

/*
| -------------------------------------------------------------------
|  Return current page title
| -------------------------------------------------------------------
*/
if(!function_exists('get_title')) {
	function get_title() {
		return get_instance()->plate->title();
	}
}

/*
| -------------------------------------------------------------------
|  Print current page title
| -------------------------------------------------------------------
*/
if(!function_exists('the_title')) {
	function the_title() {
		echo get_instance()->plate->title();
	}
}

/*
| -------------------------------------------------------------------
|  Load theme head file
| -------------------------------------------------------------------
*/
if(!function_exists('get_head')) {
	function get_head() {
		get_instance()->plate->head();
	}
}

/*
| -------------------------------------------------------------------
|  Return body tag classes
| -------------------------------------------------------------------
*/
if(!function_exists('get_body_class')) {
	function get_body_class($additional_classes = null) {
		return get_instance()->plate->body_class($additional_classes);
	}
}

/*
| -------------------------------------------------------------------
|  Print body tag classes
| -------------------------------------------------------------------
*/
if(!function_exists('the_body_class')) {
	function the_body_class($additional_classes = null) {
		echo 'class="' . get_instance()->plate->body_class($additional_classes) . '"';
	}
}

/*
| -------------------------------------------------------------------
|  Load theme header file
| -------------------------------------------------------------------
*/
if(!function_exists('get_header')) {
	function get_header() {
		get_instance()->plate->header();
	}
}

/*
| -------------------------------------------------------------------
|  Load theme footer file
| -------------------------------------------------------------------
*/
if(!function_exists('get_footer')) {
	function get_footer() {
		get_instance()->plate->footer();
	}
}

/*
| -------------------------------------------------------------------
|  Display page content
| -------------------------------------------------------------------
*/
if(!function_exists('the_content')) {
	function the_content() {
		echo get_instance()->output->final_output;
	}
}

?>
