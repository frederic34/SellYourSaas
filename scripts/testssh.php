<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// ssh osuu3y383ke4@testdeploy2apollon5.with5.dolicloud.com
$connection = ssh2_connect('testdeploy2apollon5.with5.dolicloud.com', 22, array('hostkey' => 'ecdsa-sha2-nistp256,ssh-rsa'));

var_dump($connection);