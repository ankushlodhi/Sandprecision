<?php
namespace Mageplaza\AbandonedCart\Controller\Adminhtml\Index\ShoppingBehavior;

/**
 * Interceptor class for @see \Mageplaza\AbandonedCart\Controller\Adminhtml\Index\ShoppingBehavior
 */
class Interceptor extends \Mageplaza\AbandonedCart\Controller\Adminhtml\Index\ShoppingBehavior implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\View\Result\PageFactory $resultPageFactory, \Mageplaza\AbandonedCart\Model\Behavior $behavior, \Psr\Log\LoggerInterface $logger)
    {
        $this->___init();
        parent::__construct($context, $resultPageFactory, $behavior, $logger);
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
