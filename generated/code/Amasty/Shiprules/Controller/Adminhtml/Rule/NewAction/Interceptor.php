<?php
namespace Amasty\Shiprules\Controller\Adminhtml\Rule\NewAction;

/**
 * Interceptor class for @see \Amasty\Shiprules\Controller\Adminhtml\Rule\NewAction
 */
class Interceptor extends \Amasty\Shiprules\Controller\Adminhtml\Rule\NewAction implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Backend\Model\View\Result\Forward $resultForward)
    {
        $this->___init();
        parent::__construct($context, $resultForward);
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
