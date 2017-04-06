<?php

/**
 * @author   Candison November <www.kandisheng.com>
 */

require_once(__DIR__ . '/../source/Request.php.php');

use CodeMommy\RequestPHP\Request;

Request::setRoot('./');
$result = Request::get('application.config.test.hello', 'default');
var_dump($result);