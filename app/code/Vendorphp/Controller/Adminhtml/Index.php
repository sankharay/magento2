<?php
namespace Vendorphp\\Controller\Adminhtml\;

class Index extends \Magento\Backend\App\Action
{
    const ADMIN_RESOURCE = 'Vendor\Helloworld\Model\Thing';  
    public function execute()
    {
        $resultRedirect = $this->resultRedirectFactory->create();
        $resultRedirect->setPath('*/index/index');
        return $resultRedirect;
    }     
}
