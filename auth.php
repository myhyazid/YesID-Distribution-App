<?php

$allowed = array('pass', 'fail');

if ( ! isset($_GET['action'])) {
   die('missing param');
}

$action = $_GET['action'];

if ( ! in_array($action, $allowed)) {
   die('invalid');
}



//require $action . '_' . __FILE__;
//echo __FILE__;
//echo $action . '_' . __FILE__;
//echo $action . '_' . include('tmp/authpass.php');
//require $action . '_' . include('tmp/authpass.php');
$authurl = realpath(__DIR__ . '/tmp/');
require $authurl . "/auth" . '_' . $action . ".php";
?>