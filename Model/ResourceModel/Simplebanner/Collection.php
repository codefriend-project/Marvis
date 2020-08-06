<?php

namespace Kappa\Marvis\Model\ResourceModel\Simplebanner;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init('Kappa\Marvis\Model\Simplebanner', 'Kappa\Marvis\Model\ResourceModel\Simplebanner');
    }
}