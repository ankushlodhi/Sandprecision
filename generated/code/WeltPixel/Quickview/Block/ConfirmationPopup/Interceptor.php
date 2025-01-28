<?php
namespace WeltPixel\Quickview\Block\ConfirmationPopup;

/**
 * Interceptor class for @see \WeltPixel\Quickview\Block\ConfirmationPopup
 */
class Interceptor extends \WeltPixel\Quickview\Block\ConfirmationPopup implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\WeltPixel\Quickview\Helper\Data $helper, \Magento\Checkout\CustomerData\ItemPoolInterface $itemPoolInterface, \Magento\Checkout\Model\Session $checkoutSession, \Magento\Checkout\Helper\Data $checkoutHelper, \Magento\Checkout\Model\Cart $checkoutCart, \Magento\Catalog\Model\ResourceModel\Url $catalogUrl, \Magento\Catalog\Model\ProductRepository $productRepository, \Magento\Catalog\Model\Config $catalogConfig, \Magento\Catalog\Model\Product\Visibility $catalogProductVisibility, \Magento\Framework\View\Element\Template\Context $context, array $data = [])
    {
        $this->___init();
        parent::__construct($helper, $itemPoolInterface, $checkoutSession, $checkoutHelper, $checkoutCart, $catalogUrl, $productRepository, $catalogConfig, $catalogProductVisibility, $context, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getPopupDetails()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getPopupDetails');
        return $pluginInfo ? $this->___callPlugins('getPopupDetails', func_get_args(), $pluginInfo) : parent::getPopupDetails();
    }
}
