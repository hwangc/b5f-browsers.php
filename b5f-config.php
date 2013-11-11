require_once('b5f-browsers.php');
if( b5f_browser_check( 'mobile' ) )
{ 
    define( 'WP_HOME', "http://sitename.{$_SERVER['SERVER_ADDR']}.xip.io");
    define( 'WP_SITEURL',"http://sitename.{$_SERVER['SERVER_ADDR']}.xip.io");
}