<?php

namespace Kappa\Marvis\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Simplebanner extends AbstractDb
{
    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('kappa_marvis_simplebanner', 'id');
    }
}