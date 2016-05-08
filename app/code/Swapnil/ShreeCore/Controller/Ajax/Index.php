<?php  
namespace Swapnil\ShreeCore\Controller\Ajax;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

class Index extends Action
{
    protected $pageFactory;
    public function __construct(
        Context $context,
        PageFactory $pageFactory)
    {
        $this->pageFactory = $pageFactory;
        return parent::__construct($context);
    }
    public function execute()
    {        
        //var_dump(__METHOD__);
        return $this->pageFactory->create();
    }  
}
