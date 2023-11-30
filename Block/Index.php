<?php

/**
 * @author Karen Rumbie
 * @copyright Copyright © Karen Rumbie creatives
 * @package KarenRumbie_AddToCartPopup
 */

namespace KarenRumbie\AddToCartPopup\Block;

use \Magento\Framework\View\Element\Template;
use \Magento\Store\Model\ScopeInterface;
use \Magento\Store\Model\StoreManagerInterface;
use \Magento\Framework\Registry;
use \Magento\Backend\Block\Template\Context as TemplateContext;

class Index extends Template
{
    /**
     * Constructor
     * 
     * @param \Magento\Backend\Block\Template\Context
     * @param \Magento\Framework\Registry
     * @param \Magento\Store\Model\StoreManagerInterface
     * @param array
     */
    public function __construct(
        TemplateContext $context,
        Registry $registry,
        StoreManagerInterface $_storeManager,
        $data = []
    )
    {
        $this->_registry = $registry;
        $this->_storeManager = $_storeManager;
        parent::__construct($context, $data);
    }

    /**
     * Returns value of config field at given path
     * 
     * @param string
     * 
     * @return mixed
     */
    public function getConfigValue($path)
    {
        return $this->_scopeConfig->getValue($path, ScopeInterface::SCOPE_STORE, $this->_storeManager->getStore()->getId());
    }

    /**
     * Returns product
     * 
     * @return mixed
     */
    public function getProduct()
    {
        return $this->_registry->registry('current_product');
    }

    /**
     * Returns Base URL
     * 
     * @param string
     * 
     * @return mixed
     */
    public function getBaseUrl()
    {
        return $this->_storeManager->getStore()->getBaseUrl(\Magento\Framework\UrlInterface::URL_TYPE_WEB);
    }

     /**
     * Returns if Add To Cart Popup is enabled
     * 
     * @return bool
     */
    public function enableToCartPopup()
    {
        $addToCartPopupEnabled = $this->getConfigValue('addtocartpopup/config_general/addtocartpopup_enable');

        if ($addToCartPopupEnabled == 1) {
            return true;
        } 
        
        return false;
    }

}