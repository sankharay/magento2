<?php
namespace Vendor\Helloworld\Model;
class Thing extends \Magento\Framework\Model\AbstractModel implements \Vendor\Helloworld\Api\Data\ThingInterface, \Magento\Framework\DataObject\IdentityInterface
{
    const CACHE_TAG = 'vendor_helloworld_thing';

    protected function _construct()
    {
        $this->_init('Vendor\Helloworld\Model\ResourceModel\Thing');
    }

    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }
}
