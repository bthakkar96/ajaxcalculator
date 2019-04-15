<?php

namespace Ajaxphtml\Controllerphtml\Model\ResourceModel\Blog;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection{
    protected function _construct()
    {
        $this->_init('Ajaxphtml\Controllerphtml\Model\Blog', 'Ajaxphtml\Controllerphtml\Model\ResourceModel\Blog');
    }
}