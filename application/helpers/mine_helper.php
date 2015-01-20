<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


if ( ! function_exists('log_array'))
{
	function log_array($level = 'error', $array, $php_error = FALSE)
	{
		static $LOG;

		$config =& get_config();
		if ($config['log_threshold'] == 0)
		{
			return;
		}

		$LOG =& load_class('Log');    
		ob_start();
		var_export($array);
		$tab_debug=ob_get_contents();
		ob_end_clean();

		$LOG->write_log($level, $tab_debug, $php_error);
	} 
}

if( ! function_exists('slugify'))
{
	function slugify($text) {
		$text = preg_replace('/[^-a-zA-Z0-9&\s]/i', '', $text);
		$text = trim(strtolower($text));
		$text = str_replace(array('-', ' ', '&'), array('_', '-', 'and'), $text);
		$text = urlencode($text);
	 
		return $text;
	}	
}

if( ! function_exists('preg_grep_keys'))
{
	function preg_grep_keys( $pattern, $input, $flags = 0 )
	{
	    $keys = preg_grep( $pattern, array_keys( $input ), $flags );
	    $vals = array();
	    foreach ( $keys as $key )
	    {
	        $vals[$key] = $input[$key];
	    }
	    return $vals;
	}
}

if( ! function_exists('validate_phone_number'))
{
    function validate_phone_number($phoneNumber)
    {
       //Check to make sure the phone number format is valid 
        if(preg_match('/^\+?\d{1,3}(?:\s*\(\d+\)\s*)?(?:(?:\-\d{1,3})+\d|\d{6,}|(?:\s\d{1,3})+\d)$/', $phoneNumber))
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}

if( ! function_exists('validate_email'))
{
    function validate_email($email)
    {
       //Check to make sure the email format is valid 
        if (preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix ", $email))
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}
