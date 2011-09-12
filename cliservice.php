<?php
require_once 'lib/Service.php';
require_once 'lib/Service/Core.php';

$service = new Service('print');

if($service->authenticate('1'))
{
    echo $service->run('Service_Core', $argv[0], array());
}
