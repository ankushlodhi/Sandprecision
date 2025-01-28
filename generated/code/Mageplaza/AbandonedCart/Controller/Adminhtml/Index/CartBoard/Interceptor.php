<?php
namespace Mageplaza\AbandonedCart\Controller\Adminhtml\Index\CartBoard;

/**
 * Interceptor class for @see \Mageplaza\AbandonedCart\Controller\Adminhtml\Index\CartBoard
 */
class Interceptor extends \Mageplaza\AbandonedCart\Controller\Adminhtml\Index\CartBoard implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\View\Result\PageFactory $resultPageFactory, \Mageplaza\AbandonedCart\Model\CartBoard $cartBoard, \Psr\Log\LoggerInterface $logger)
    {
        $this->___init();
        parent::__construct($context, $resultPageFactory, $cartBoard, $logger);
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
