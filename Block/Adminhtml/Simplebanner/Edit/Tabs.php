<?php

namespace Kappa\Marvis\Block\Adminhtml\Simplebanner\Edit;

/**
 * Class Tabs
 * @package Kappa\Marvis\Block\Adminhtml\Simplebanner\Edit
 */
class Tabs extends \Magento\Backend\Block\Widget\Tabs
{
    /**
     * constructor
     *
     * @return void
     */
    protected function _construct()
    {
        parent::_construct();

        $this->setId('simplebanner_tabs');
        $this->setDestElementId('edit_form');
        $this->setTitle(__('Simple Banner Information'));
    }
}
