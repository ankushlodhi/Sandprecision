<?php
namespace Amasty\Shiprules\Controller\Adminhtml\Rule\MassAction;

/**
 * Interceptor class for @see \Amasty\Shiprules\Controller\Adminhtml\Rule\MassAction
 */
class Interceptor extends \Amasty\Shiprules\Controller\Adminhtml\Rule\MassAction implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Ui\Component\MassAction\Filter $filter, \Magento\Framework\Data\Collection\AbstractDb $collection, \Magento\Backend\Model\View\Result\RedirectFactory $redirectFactory, \Magento\Framework\Model\ResourceModel\Db\AbstractDb $resource)
    {
        $this->___init();
        parent::__construct($context, $filter, $collection, $redirectFactory, $resource);
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
