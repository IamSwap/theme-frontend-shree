<?php

namespace Swapnil\ShreeCore\Block\Customer\Form;
use Magento\Customer\Block\Form\Login as CustomerLogin;


class Login extends CustomerLogin
{
    protected function _prepareLayout()
    {
        $this->pageConfig->getTitle()->set(null);
        return parent::_prepareLayout();
    }
}