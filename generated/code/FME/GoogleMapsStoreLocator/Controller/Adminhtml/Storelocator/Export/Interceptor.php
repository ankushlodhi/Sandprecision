<?php
namespace FME\GoogleMapsStoreLocator\Controller\Adminhtml\Storelocator\Export;

/**
 * Interceptor class for @see \FME\GoogleMapsStoreLocator\Controller\Adminhtml\Storelocator\Export
 */
class Interceptor extends \FME\GoogleMapsStoreLocator\Controller\Adminhtml\Storelocator\Export implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\View\Result\PageFactory $resultPageFactory, \FME\GoogleMapsStoreLocator\Model\Storelocator $model, \Magento\Framework\App\Response\Http\FileFactory $fileFactory)
    {
        $this->___init();
        parent::__construct($context, $resultPageFactory, $model, $fileFactory);
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
