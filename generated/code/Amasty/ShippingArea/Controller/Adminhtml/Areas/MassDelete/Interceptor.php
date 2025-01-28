<?php
namespace Amasty\ShippingArea\Controller\Adminhtml\Areas\MassDelete;

/**
 * Interceptor class for @see \Amasty\ShippingArea\Controller\Adminhtml\Areas\MassDelete
 */
class Interceptor extends \Amasty\ShippingArea\Controller\Adminhtml\Areas\MassDelete implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Ui\Component\MassAction\Filter $filter, \Amasty\ShippingArea\Model\ResourceModel\Area $areaResource, \Amasty\ShippingArea\Model\ResourceModel\Area\CollectionFactory $collectionFactory)
    {
        $this->___init();
        parent::__construct($context, $filter, $areaResource, $collectionFactory);
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
