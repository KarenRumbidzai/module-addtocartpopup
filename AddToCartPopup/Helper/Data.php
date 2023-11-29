<?php /**
* @author Karen Rumbie
* @copyright Copyright © Karen Rumbie creatives
* @package KarenRumbie_AddToCartPopup
*/
namespace KarenRumbie\AddToCartPopup\Helper;
use Magento\Framework\App\Config\ScopeConfigInterface;

class Data extends \Magento\Framework\App\Helper\AbstractHelper {

    /**
    * @var \Magento\Framework\App\Config\ScopeConfigInterface
    */
    protected $scopeConfig;

    /**
    * Data constructor
    * @param \Magento\Framework\App\Helper\Context $context
    * @param \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
    */
    public function __construct(
        \Magento\Framework\App\Helper\Context $context,
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
        ) {
        parent::__construct($context);
    }

    /**
    * @return $isEnabled
    */
    public function enableToCartPopup() {
        $enableToCartPopup = $this->scopeConfig->getValue('addtocartpopup/config_general/addtocartpopup_enable');
        if ($enableToCartPopup == 1) {
            return true;
        }        
        return false;
    }
    
}
?>
