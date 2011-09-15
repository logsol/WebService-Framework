<?php
abstract class Service_Core_Abstract
{
    protected $_messenger;

    public function __construct(Service_Messenger $messenger)
    {
        $this->_messenger = $messenger;
    }

    public function setParams(){}

    protected function _getParam(){}

    protected function _getAllParams(){}
}
