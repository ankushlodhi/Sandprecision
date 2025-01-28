<?php
namespace FME\GoogleMapsStoreLocator\Ui\Component\Listing\Column\Actions;

/**
 * Interceptor class for @see \FME\GoogleMapsStoreLocator\Ui\Component\Listing\Column\Actions
 */
class Interceptor extends \FME\GoogleMapsStoreLocator\Ui\Component\Listing\Column\Actions implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\UiComponent\ContextInterface $context, \Magento\Framework\View\Element\UiComponentFactory $uiComponentFactory, \FME\GoogleMapsStoreLocator\Block\Adminhtml\Storelocator\Grid\Renderer\Action\UrlBuilder $actionUrlBuilder, \Magento\Framework\UrlInterface $urlBuilder, array $components = [], array $data = [], $editUrl = 'googlemapsstorelocator/storelocator/edit')
    {
        $this->___init();
        parent::__construct($context, $uiComponentFactory, $actionUrlBuilder, $urlBuilder, $components, $data, $editUrl);
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
