<?php
# --------------------------------------------------------------------------------------
# Define BASE_PATH
#
$tmp = explode(DIRECTORY_SEPARATOR, __DIR__);
unset($tmp[count($tmp)-1]);
define('BASE_PATH', implode(DIRECTORY_SEPARATOR, $tmp) . DIRECTORY_SEPARATOR);
define('PUBLIC_PATH', BASE_PATH . 'public_html/');
define('WEB_URL', "http://localhost/public_html/");
#
# Set PHP configuration options
define('CLASS_ROOT', PUBLIC_PATH . 'class/');
#
# Set common constants
define('PRIVATE_PATH', BASE_PATH . 'private_html/');
#
# Set Smarty constants
define('SMARTY_ROOT', PUBLIC_PATH . 'libs/smarty-4.2.1/');
define('SMARTY_TEMPLATES', PUBLIC_PATH . 'templates/');
define('SMARTY', SMARTY_ROOT . 'lib/Smarty.class.php');
/*
 * The following has been added to resolve the problem of relying on the system's timezone settings.
 */
date_default_timezone_set('America/New_York');
# Define the Smarty template/presentation framework.
/* ------------------------------------------------------------------------------------
 * This application uses Smarty, a template/presentation framework which can be
 * downloaded from www.Smarty.net
 */
require_once SMARTY;
$smarty = new Smarty;
$smarty -> setTemplateDir(SMARTY_TEMPLATES);
$smarty -> setCompileDir(SMARTY_ROOT . 'templates_c');
$smarty -> setCacheDir(SMARTY_ROOT . 'cache');
$smarty -> setConfigDir(SMARTY_ROOT . 'configs');
$smarty -> assign('WEB_URL', WEB_URL);