<?php
require_once __DIR__ . "/vendor/autoload.php";

$sift = new SiftClient(array(
    'api_key' => 'my_api_key',
    'account_id' => 'my_account_id'
));

$sift->dosomethingfunyo();
