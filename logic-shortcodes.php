<?php
/*
Plugin Name: Logic Shortcodes
Plugin URI: https://wordpress.org/plugins/logic-shortcodes/
Description: Use shortcodes for conditional logic based on post meta or taxonomy terms.
Author: Samuel Diethelm
Version: 1.0
License: GPLv3 or later
Author URI: http://www.samueldiethelm.com/
*/

add_shortcode('if','conditional_shortcodes_if');
function conditional_shortcodes_if($atts,$content=NULL)
{	
	$post_id = get_the_ID();
	$condition = false;
	
	if(isset($atts['taxonomy']))
	{
		if(isset($atts['slug']))
			$term = get_term_by('slug',$atts['slug'],$atts['taxonomy']);
		elseif(isset($atts['name']))
			$term = get_term_by('name',$atts['name'],$atts['taxonomy']);
		elseif(isset($atts['id'])){
			$term = get_term_by('id',$atts['id'],$atts['taxonomy']);
		}
		if(isset($term->term_id) && has_term((int)$term->term_id,$atts['taxonomy']))
			return do_shortcode($content);
		else
			return '';
	}
	
	if(isset($atts['postmeta']))
	{
		$postmetas = get_post_meta($post_id,$atts['postmeta']);
		
		if(!isset($atts['value']))
		{
			if(count($postmetas))
				return do_shortcode($content);
			else
				return '';
		}else{
			foreach($postmetas as $postmeta)
			{
				if($postmeta == $atts['value'])
					return do_shortcode($content);
			}
			return '';			
		}
	}
	
}
