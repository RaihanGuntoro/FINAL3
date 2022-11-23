<?php
ini_set('display_errors', 'On');
error_reporting(error_reporting() & ~E_NOTICE);

require_once 'app/config/config.php';

require_once 'app/init.php';

require_once './vendor/autoload.php';

$app = new App;
