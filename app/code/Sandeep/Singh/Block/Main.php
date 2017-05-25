<?php
namespace Sandeep\Singh\Block;
class Main extends \Magento\Theme\Block\Html\Header\Logo
{
    public function getLogoAlts()
    {
        if (empty($this->_data['logo_alt'])) {
            $this->_data['logo_alt'] = $this->_scopeConfig->getValue(
                'design/header/logo_alt',
                \Magento\Store\Model\ScopeInterface::SCOPE_STORE
            );
        }
        return "Sandeep"; // $this->_data['logo_alt'];
    }
}
