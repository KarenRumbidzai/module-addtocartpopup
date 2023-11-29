/**
 * @author Karen Rumbie
 * @copyright Copyright © Karen Rumbie creatives
 * @package KarenRumbie_AddToCartPopup
 */

require(['jquery'], function($){
    $(document).ready( function() {

        let vectraAddToCartPopup = '[id^="vectra-addtoModal"]';
        let productPopupImgWrapper = '#productImg .product-image-wrapper';
        const catalogPageImg = '.vectra-listing-page';
        const categoryPageImg = '.vectra-detail-page'

        if ($(vectraAddToCartPopup).length > 0) {
            $("[id^='vectra-addToTrigger']").click(function() {
                if ($(catalogPageImg).length) {
                    $(productPopupImgWrapper).css('padding-bottom', '70%')
                }
                if ($(categoryPageImg).length) {
                    $(productPopupImgWrapper).css('padding-bottom', '58%')
                }
            })
        }

        const isExecuted = setInterval(addedToCartCheck, 500);
        function addedToCartCheck() {
            if ($('.message-success.success.message').length) {
                $('.product-item-inner').addClass('addedtocart')
            }
        }
        function stopAddedToCartCheck() {
            clearInterval(isExecuted);
        }

    });
});