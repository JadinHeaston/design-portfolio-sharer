<?php
require_once(__DIR__ . '/models.php');
require_once(__DIR__ . '/config.php');
require_once(__DIR__ . '/globals.php');
require_once(__DIR__ . '/template_functions.php');
require_once(__DIR__ . '/functions.php');

if (((isset($GLOBALS['disable_auth']) && $GLOBALS['disable_auth'] !== true) && auth() === false))
	reauth();

if (checkForFolder(ROOT_DATA_FOLDER) === false)
	exit(1);

$GLOBALS['DB'] = new DBConnector('sqlite', DATABASE_PATH);
$GLOBALS['DB']->init();
