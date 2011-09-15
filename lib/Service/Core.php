<?php
require_once 'Core/Abstract.php';
require_once 'Core/Interface.php';

class Service_Core extends Service_Core_Abstract implements Service_Core_Interface
{
    public function query()
    {
        return array('hans', 'peter', 'gustav');
    }
}
