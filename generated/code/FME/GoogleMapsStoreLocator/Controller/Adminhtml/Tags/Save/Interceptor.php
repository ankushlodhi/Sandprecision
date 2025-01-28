<?php
namespace FME\GoogleMapsStoreLocator\Controller\Adminhtml\Tags\Save;

/**
 * Interceptor class for @see \FME\GoogleMapsStoreLocator\Controller\Adminhtml\Tags\Save
 */
class Interceptor extends \FME\GoogleMapsStoreLocator\Controller\Adminhtml\Tags\Save implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \FME\GoogleMapsStoreLocator\Controller\Adminhtml\Tags\PostDataProcessor $dataProcessor, \FME\GoogleMapsStoreLocator\Model\Tags $model, \Magento\Framework\App\Request\DataPersistorInterface $dataPersistor)
    {
        $this->___init();
        parent::__construct($context, $dataProcessor, $model, $dataPersistor);
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
