<?php
/**
 * Functions - Child theme custom functions
 */

if (!function_exists('Divichild_footer_credits')) { 
	function Divichild_footer_credits($credits_values) {
		$firstyear = $credits_values[0];
		$owner = $credits_values[1];
		$ownerlink = $credits_values[2];
		$WPlink_text = $credits_values[3];	
		$footer_credits = 'Copyright &copy; '.$firstyear;
		$current_year = date('Y');
		if ($firstyear) {
				if($firstyear != $current_year) {
					$footer_credits .= ' - '.$current_year;
				}
			} else {
				$footer_credits .= $current_year;	
		}
		$footer_credits .= ' <a href="'.$ownerlink.'">'.$owner.'</a>';
		if ($WPlink_text) {
			$footer_credits .= ' | '.$WPlink_text.' '.'<a href="http://www.wordpress.org">WordPress</a>';
		}
		return $footer_credits;
	}
}


/**
 * Divi 2.0 patch.
 * If the version of Divi being used is prior to 2.0, nothing is done.
 * If Divi 2.0 is used, this patch modifies the original et_pb_update_predefined_layouts() function in order to avoid duplicated predefined layouts.
 * If a Divi version greater than 2.0 is used, the duplicated predefined layouts issue should have been fixed by ET, so the original function is called. 
 */
remove_action( 'admin_init', 'et_pb_update_predefined_layouts' );
function Divichild_pb_update_predefined_layouts() {
	if ( '2.0' == wp_get_theme('Divi')->get( 'Version' ) ) {
		if ( 'on' === get_theme_mod( 'et_pb_predefined_layouts_updated_2_0' ) ) {
			return;
		}
		if ( ! get_theme_mod( 'et_pb_predefined_layouts_added' ) OR ( 'on' === get_theme_mod( 'et_pb_predefined_layouts_added' ) )) {	
			// layouts have been added already, delete default layouts
			et_pb_delete_predefined_layouts();
		}
		// add predefined layouts
		et_pb_add_predefined_layouts();
		set_theme_mod( 'et_pb_predefined_layouts_updated_2_0', 'on' );
	} elseif ( '2.0' < wp_get_theme('Divi')->get( 'Version' ) ) {
		et_pb_update_predefined_layouts();
	}
}
//add_action( 'admin_init', 'Divichild_pb_update_predefined_layouts' );



?>