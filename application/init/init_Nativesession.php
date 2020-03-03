<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Loads and instantiates native session class
 */    

if ( ! class_exists('Nativesession'))
{
    require_once(APPPATH.'libraries/Nativesession'.EXT);
}

// sessions engine should run on cookies to minimize opportunities
// of session fixation attack
ini_set('session.use_only_cookies', 1);

$obj =& get_instance();
$obj->session = new Nativesession();
$obj->ci_is_loaded[] = 'session';