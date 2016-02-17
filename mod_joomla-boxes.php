<?php
// No direct access
defined('_JEXEC') or die;
require_once dirname(__FILE__) . '/helper.php';

$hello = Boxes::info($params);
require JModuleHelper::getLayoutPath('mod_joomla-boxes',$params->get('layout', 'default'));
//echo '2';
