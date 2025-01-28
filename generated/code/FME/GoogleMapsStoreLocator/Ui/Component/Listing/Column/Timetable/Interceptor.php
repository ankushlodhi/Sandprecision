<?php
namespace FME\GoogleMapsStoreLocator\Ui\Component\Listing\Column\Timetable;

/**
 * Interceptor class for @see \FME\GoogleMapsStoreLocator\Ui\Component\Listing\Column\Timetable
 */
class Interceptor extends \FME\GoogleMapsStoreLocator\Ui\Component\Listing\Column\Timetable implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\UiComponent\ContextInterface $context, \Magento\Framework\View\Element\UiComponentFactory $uiComponentFactory, \FME\GoogleMapsStoreLocator\Block\Adminhtml\Timetable\Grid\Renderer\Action\UrlBuilder $actionUrlBuilder, \Magento\Framework\UrlInterface $urlBuilder, array $components = [], array $data = [], $editUrl = 'googlemapsstorelocator/timetable/edit')
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
