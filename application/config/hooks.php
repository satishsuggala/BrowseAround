<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/*
  | -------------------------------------------------------------------------
  | Hooks
  | -------------------------------------------------------------------------
  | This file lets you define "hooks" to extend CI without hacking the core
  | files.  Please see the user guide for info:
  |
  |	http://codeigniter.com/user_guide/general/hooks.html
  |
 */



/* End of file hooks.php */
/* Location: ./application/config/hooks.php */

$hook['pre_system'][] = array(
    'class' => 'Autocomplete',
    'function' => 'override_get',
    'filename' => 'autocomplete.php',
    'filepath' => 'hooks',
    'params' => array()
);
