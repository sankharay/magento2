<?php
namespace Vendor\Helloworld\Controller\Adminhtml\php pestle.phar generate_view Vendor_Helloworld adminhtml vendor_helloworld_things_index_index Main content.phtml 1column\php pestle.phar magento2:generate:ui:grid Vendor_Helloworld vendor_helloworld_things 'Vendor\Helloworld\Model\ResourceModel\Thing;
class Collection' vendor_helloworld_thing_id extends \Magento\Backend\App\Action
{
    
    const ADMIN_RESOURCE = 'php pestle.phar generate_view Vendor_Helloworld adminhtml vendor_helloworld_things_index_index Main content.phtml 1column';       
        
    protected $resultPageFactory;
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory)
    {
        $this->resultPageFactory = $resultPageFactory;        
        parent::__construct($context);
    }
    
    public function execute()
    {
        return $this->resultPageFactory->create();  
    }
}
