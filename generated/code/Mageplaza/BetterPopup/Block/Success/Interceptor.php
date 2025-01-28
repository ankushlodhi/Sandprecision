<?php
namespace Mageplaza\BetterPopup\Block\Success;

/**
 * Interceptor class for @see \Mageplaza\BetterPopup\Block\Success
 */
class Interceptor extends \Mageplaza\BetterPopup\Block\Success implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Block\Product\Context $context, \Mageplaza\BetterPopup\Helper\Data $helperData, \Magento\Framework\Stdlib\DateTime\TimezoneInterface $localeDate, \Magento\Newsletter\Model\ResourceModel\Subscriber\CollectionFactory $subscriberCollectionFactory, \Mageplaza\BetterPopup\Model\Generate $generate, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $helperData, $localeDate, $subscriberCollectionFactory, $generate, $data);
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
