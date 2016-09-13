<?php  

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$config['base_url'] = 'http://localhost:8888/Mental-Health-Mobile-Application';


$config['index_page'] = '';


$config['uri_protocol']	= 'REQUEST_URI';


$config['url_suffix'] = '';

$config['language']	= 'english';

$config['charset'] = 'UTF-8';

$config['enable_hooks'] = FALSE;

$config['subclass_prefix'] = 'MY_';

$config['permitted_uri_chars'] = 'a-z 0-9~%.:_\-';

$config['allow_get_array']		= TRUE;
$config['enable_query_strings'] = FALSE;
$config['controller_trigger']	= 'c';
$config['function_trigger']		= 'm';


$config['log_threshold'] = 0;

$config['log_path'] = '';


$config['log_date_format'] = 'Y-m-d H:i:s';


$config['encryption_key'] = '';


$config['sess_cookie_name']		= 'ci_session'; // name of cookie
$config['sess_expiration']		= 3600; 		// # of sec the session lasts
$config['sess_expire_on_close']	= FALSE;        // True if the session expires when closing the browser; False otherwise
$config['sess_encrypt_cookie']	= FALSE;		// True if the cookie is encrypted; False otherwise
$config['sess_use_database']	= FALSE;        // True if the session data is saved to the database; False otherwise
$config['sess_table_name']		= 'ci_sessions'; //the name of th session database table
$config['sess_match_ip']		= FALSE;        //True if want to match the user's IP; False otherwise
$config['sess_match_useragent']	= TRUE;         //True if wamt to match the User Agent; False otherwise
$config['sess_time_to_update']	= 300;


$config['cookie_prefix']	= "";
$config['cookie_domain']	= "";
$config['cookie_path']		= "/";
$config['cookie_secure']	= FALSE;


$config['global_xss_filtering'] = FALSE;



$config['csrf_protection'] = FALSE;
$config['csrf_token_name'] = 'csrf_test_name';
$config['csrf_cookie_name'] = 'csrf_cookie_name';
$config['csrf_expire'] = 7200;


$config['compress_output'] = FALSE;

$config['time_reference'] = 'local';


$config['rewrite_short_tags'] = FALSE;



$config['proxy_ips'] = '';


