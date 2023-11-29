<?php

/**
 * @author Karen Rumbie
 * @copyright Copyright © Karen Rumbie creatives
 * @package KarenRumbie_AddToCartPopup
 */

namespace KarenRumbie\AddToCartPopup\Block;

use \Magento\Framework\Registry;
use \Magento\Store\Model\StoreManagerInterface;
use Magento\Backend\Block\Template\Context as TemplateContext;
use KarenRumbie\AddToCartPopup\Block\Index as AddToCartPopupIndex;
use Magento\Catalog\Helper\Image; 

class AddToCartPopup extends AddToCartPopupIndex
{
    /**
     * Constructor
     * 
     * @param Magento\Backend\Block\Template\Context
     * @param \Magento\Framework\Registry
     * @param \Magento\Store\Model\StoreManagerInterface
     * @param \Magento\Catalog\Helper\Image
     * @param array
     */
    public function __construct(
        TemplateContext $context,
        Registry $registry,
        StoreManagerInterface $_storeManager,
        Image $imageHelper
    )
    {
        parent::__construct($context, $registry, $_storeManager);
        $this->imageHelper = $imageHelper;
    }

    /**
     * Returns Product image
     * 
     * @return mixed
     */
    public function getImage()
    {
        $image = $this->getProduct()->getImage();

        return $image && $image != 'no_selection'
            ? $this->imageHelper
                ->init($this->getProduct(), 'product_page_image_medium')
                ->setImageFile($image)
                ->getUrl()
            : $this->imageHelper->getDefaultPlaceholderUrl('image');
    } 
          
}