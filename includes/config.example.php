<?php
define('APP_ROOT', '/');
define('DEBUG', false);
define('TZ', 'America/Chicago');
define('DISABLE_ERROR_EMAILS', false);
define('REQUIRE_JAVASCRIPT', false); //Setting to 'true' causes a full page pop up, preventing site usage, if JS is disabled.

define('ROOT_DATA_FOLDER', __DIR__ . '/../data/');

//Database
define('DATABASE_PATH', ROOT_DATA_FOLDER . DIRECTORY_SEPARATOR . 'database.sqlite3');
