<?php
/*
Plugin Name: Before It's News&reg;: Politics
Plugin URI: http://www.beforeitsnews.com/widgets
Description: Your widget will update every time our site does. A new story is added virtually every minute! Stay up to date and keep your viewers up to date. The widget loads fast and won't bog down your page-load time.
Version: 0.2
Author: Justin Dawson
Author URI: http://justindawson.com
*/

/* Add the widget widgets_init */
add_action( 'widgets_init', 'bin_load_politics_widgets' );

/* Register the widget */
function bin_load_politics_widgets() {
	register_widget( 'Politics_Widget' );
} /* End registration of the widget */

/* politics_Widget class */
class Politics_Widget extends WP_Widget {
	
	/* Widget setup */
	function Politics_Widget() {
	
		/* Widget settings */
		$widget_ops = array( 'classname' => 'politics', 'description' => __( 'You widget will update every time our site does. A new story is added virtually every minute! Stay up to date and keep your viewers up todate. The widget loads fans and won\'t bog down your page-load time.', 'politics' ) );
		
		/* Create the widget */
		$this->WP_Widget( 'politics-wdiget', __( 'Before It\'s News&reg;: Politics', 'politics' ), $widget_ops );
	
	} /* End widget setup */
	
	/* Display the widget once activated */
	function widget( $args ) {
		extract( $args );
		
		/* Before widget */
		echo $before_widget;
		
		/* During widget */
		echo '<a class="b4in-widget" href="http://beforeitsnews.com/widget/politics">Before It\'s News | People Powered News</a><script type="text/javascript" src="http://beforeitsnews.com/widgets/js/widget.js"></script>';
		
		/* After widget */
		echo $after_widget;
		
	} /* Stop displaying the widget */
	
} /* End politics_Widget class */

?>