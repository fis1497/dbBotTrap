<?php

/**
 * dbBotTrap
 *
 * @author Ralf Hertsch <ralf.hertsch@phpmanufaktur.de>
 * @link https://addons.phpmanufaktur.de/de/addons/dbconnect.php
 * @copyright 2009-2012 phpManufaktur by Ralf Hertsch
 * @license http://www.gnu.org/licenses/gpl.html GNU Public License (GPL)
 */

// try to include LEPTON class.secure.php to protect this file and the whole CMS!
if (defined('WB_PATH')) {
  if (defined('LEPTON_VERSION')) include(WB_PATH.'/framework/class.secure.php');
} elseif (file_exists($_SERVER['DOCUMENT_ROOT'].'/framework/class.secure.php')) {
  include($_SERVER['DOCUMENT_ROOT'].'/framework/class.secure.php');
} else {
  $subs = explode('/', dirname($_SERVER['SCRIPT_NAME']));	$dir = $_SERVER['DOCUMENT_ROOT'];
  $inc = false;
  foreach ($subs as $sub) {
    if (empty($sub)) continue; $dir .= '/'.$sub;
    if (file_exists($dir.'/framework/class.secure.php')) {
      include($dir.'/framework/class.secure.php'); $inc = true;	break;
    }
  }
  if (!$inc) trigger_error(sprintf("[ <b>%s</b> ] Can't include LEPTON class.secure.php!", $_SERVER['SCRIPT_NAME']), E_USER_ERROR);
}
// end include LEPTON class.secure.php

$module_directory     = 'dbbottrap';
$module_name          = 'dbBotTrap';
$module_function      = 'tool';
$module_version       = '0.12';
$module_status        = 'BETA';
$module_platform      = '2.8';
$module_author        = 'Ralf Hertsch, Berlin (Germany)';
$module_license       = 'GNU General Public License';
$module_description   = 'Tool for viewing BotTrap Logfiles';
$module_home          = 'http://phpmanufaktur.de';
$module_guid          = 'F61D61D0-A453-47BE-82D1-9C614C2C8FF7';

?>
