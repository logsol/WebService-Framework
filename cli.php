<?php
require_once 'lib/Service.php';
require_once 'lib/Service/Core.php';

$command = $argv[1];
$mode = $argv[2];
$auth = $argv[3];
$params = array();

$service = new Service($mode);

if($service->authenticate($auth))
{
    $core = new Service_Core();
    echo $service->run($core, $command, $params);
} 
else 
{
    echo 'access denied';
}
