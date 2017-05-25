<?php
namespace Vendor\Helloworld\Model\ResourceModel\Thing;
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected function _construct()
    {
        $this->_init('Vendor\Helloworld\Model\Thing','Vendor\Helloworld\Model\ResourceModel\Thing');
    }
}
