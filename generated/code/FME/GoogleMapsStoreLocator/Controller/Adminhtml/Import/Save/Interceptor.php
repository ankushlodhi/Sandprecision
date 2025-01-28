<?php
namespace FME\GoogleMapsStoreLocator\Controller\Adminhtml\Import\Save;

/**
 * Interceptor class for @see \FME\GoogleMapsStoreLocator\Controller\Adminhtml\Import\Save
 */
class Interceptor extends \FME\GoogleMapsStoreLocator\Controller\Adminhtml\Import\Save implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \FME\GoogleMapsStoreLocator\Model\Storelocator $model, \FME\GoogleMapsStoreLocator\Helper\Data $helper, \Magento\Framework\File\Csv $csvProcessor, \Magento\Framework\Filter\FilterManager $filterManager, \Magento\Framework\App\Filesystem\DirectoryList $directorylist)
    {
        $this->___init();
        parent::__construct($context, $model, $helper, $csvProcessor, $filterManager, $directorylist);
    }

    /**
     * {@inheritdoc}
     */
    public function execute()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute();
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dispatch');
        return $pluginInfo ? $this->___callPlugins('dispatch', func_get_args(), $pluginInfo) : parent::dispatch($request);
    }
}
