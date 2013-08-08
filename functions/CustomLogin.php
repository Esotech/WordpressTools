add_action('login_head', 'wph_custom_login_logo');
if ( !function_exists('wph_custom_login_logo') )
{
  function wph_custom_login_logo() 
	{
	    echo '<style type="text/css">h1 a { background-image:url(' . get_stylesheet_directory_uri() .'/images/esotech-wordpress-logo.png) !important; opacity:0.7; height: 47px !important;}</style>';
	}
}
