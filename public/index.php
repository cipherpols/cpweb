<?php
/**
 * File index.php
 *
 * @author Tuan Duong <duongthaso@gmail.com>
 * @package CipherPols
 * @version 1.0
 */

define('APPLICATION_PATH', realpath(realpath(__DIR__) . '/../src/application'));
define('VENDOR_PATH', realpath(APPLICATION_PATH) . '/../../vendor');

// APC bug workaround
register_shutdown_function('session_write_close');

define('START_TIME', microtime(true));

// Define environment
defined('APPLICATION_ENV')
|| define('APPLICATION_ENV', (getenv('APPLICATION_ENV') ? getenv('APPLICATION_ENV') : 'live'));

// Ensure library/ is on include_path
set_include_path(
    implode(
        PATH_SEPARATOR,
        array(
            realpath(APPLICATION_PATH . '/../library/'),
            realpath(APPLICATION_PATH . '/../../vendor/'),
            get_include_path(),
        )
    )
);

require_once realpath(VENDOR_PATH) . '/autoload.php';

// Create application, bootstrap, and run
$application = new \Cze\Application(
    APPLICATION_ENV,
    \Cze\Application\Config::getConfig(APPLICATION_ENV)
);
$application->run();
