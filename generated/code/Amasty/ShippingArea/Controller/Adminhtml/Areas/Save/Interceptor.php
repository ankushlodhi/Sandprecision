<?php
namespace Amasty\ShippingArea\Controller\Adminhtml\Areas\Save;

/**
 * Interceptor class for @see \Amasty\ShippingArea\Controller\Adminhtml\Areas\Save
 */
class Interceptor extends \Amasty\ShippingArea\Controller\Adminhtml\Areas\Save implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\App\Request\DataPersistorInterface $dataPersistor, \Amasty\ShippingArea\Api\AreaRepositoryInterface $areaRepository, \Amasty\ShippingArea\Api\Data\AreaInterfaceFactory $areaFactory)
    {
        $this->___init();
        parent::__construct($context, $dataPersistor, $areaRepository, $areaFactory);
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
