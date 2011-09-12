<?php

require_once 'lib/Service.php';
require_once 'lib/Service/Core.php';

$service = new Service($_GET['mode']);

if($service->authenticate($_SESSION['auth']))
{
    echo $service->run('Service_Core', $_GET['cmd'], $_POST);
}
