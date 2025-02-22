<?php
namespace Magento\Catalog\Block\Product\ProductList\Upsell;

/**
 * Interceptor class for @see \Magento\Catalog\Block\Product\ProductList\Upsell
 */
class Interceptor extends \Magento\Catalog\Block\Product\ProductList\Upsell implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Block\Product\Context $context, \Magento\Checkout\Model\ResourceModel\Cart $checkoutCart, \Magento\Catalog\Model\Product\Visibility $catalogProductVisibility, \Magento\Checkout\Model\Session $checkoutSession, \Magento\Framework\Module\Manager $moduleManager, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $checkoutCart, $catalogProductVisibility, $checkoutSession, $moduleManager, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function isRedirectToCartEnabled()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isRedirectToCartEnabled');
        return $pluginInfo ? $this->___callPlugins('isRedirectToCartEnabled', func_get_args(), $pluginInfo) : parent::isRedirectToCartEnabled();
    }

    /**
     * {@inheritdoc}
     */
    public function getImage($product, $imageId, $attributes = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getImage');
        return $pluginInfo ? $this->___callPlugins('getImage', func_get_args(), $pluginInfo) : parent::getImage($product, $imageId, $attributes);
    }

    /**
     * {@inheritdoc}
     */
    public function toHtml()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toHtml');
        return $pluginInfo ? $this->___callPlugins('toHtml', func_get_args(), $pluginInfo) : parent::toHtml();
    }
}
