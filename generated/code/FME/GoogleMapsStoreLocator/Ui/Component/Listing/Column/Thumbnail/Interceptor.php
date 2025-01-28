<?php
namespace FME\GoogleMapsStoreLocator\Ui\Component\Listing\Column\Thumbnail;

/**
 * Interceptor class for @see \FME\GoogleMapsStoreLocator\Ui\Component\Listing\Column\Thumbnail
 */
class Interceptor extends \FME\GoogleMapsStoreLocator\Ui\Component\Listing\Column\Thumbnail implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\UiComponent\ContextInterface $context, \Magento\Framework\View\Element\UiComponentFactory $uiComponentFactory, \Magento\Catalog\Helper\Image $imageHelper, \Magento\Framework\UrlInterface $urlBuilder, \Magento\Store\Model\StoreManagerInterface $storeManager, array $components = [], array $data = [])
    {
        $this->___init();
        parent::__construct($context, $uiComponentFactory, $imageHelper, $urlBuilder, $storeManager, $components, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function prepare()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'prepare');
        return $pluginInfo ? $this->___callPlugins('prepare', func_get_args(), $pluginInfo) : parent::prepare();
    }
}
