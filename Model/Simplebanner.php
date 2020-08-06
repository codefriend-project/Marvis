<?php

namespace Kappa\Marvis\Model;

class Simplebanner extends \Magento\Framework\Model\AbstractModel
{
    protected function _construct()
    {
        $this->_init('Kappa\Marvis\Model\ResourceModel\Simplebanner');
    }
}