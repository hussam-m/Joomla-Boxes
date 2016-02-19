<?php
/*
*   Joomla-Boxes is an extension for Joomla to show 3 div boxes in the Joomla page
*   Hussam Almoharb
*   hussam.am@gmail.com
*   Last updated on 2/18/2016
*/

// No direct access
defined('_JEXEC') or die;

//include helper
require_once dirname(__FILE__) . '/helper.php';

// set the layout
require JModuleHelper::getLayoutPath('mod_joomla-boxes',$params->get('layout', 'default'));
