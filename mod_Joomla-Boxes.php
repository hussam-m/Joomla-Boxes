<?php
// No direct access
defined('_JEXEC') or die;
require_once dirname(__FILE__) . '/helper.php';

$hello = Boxes::info($params);
require JModuleHelper::getLayoutPath('mod_Joomla-Boxes');
//echo '2';
