<?php
namespace Vendor\Helloworld\Model\ResourceModel;
class Thing extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    protected function _construct()
    {
        $this->_init('vendor_helloworld_thing','vendor_helloworld_thing_id');
    }
}
