<?php
namespace Mageplaza\AbandonedCart\Controller\Adminhtml\Index\SentAgain;

/**
 * Interceptor class for @see \Mageplaza\AbandonedCart\Controller\Adminhtml\Index\SentAgain
 */
class Interceptor extends \Mageplaza\AbandonedCart\Controller\Adminhtml\Index\SentAgain implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\View\Result\PageFactory $resultPageFactory, \Mageplaza\AbandonedCart\Helper\Data $jsonHelper, \Psr\Log\LoggerInterface $logger, \Mageplaza\AbandonedCart\Model\ResourceModel\Logs $abandonedCartLog, \Mageplaza\AbandonedCart\Model\LogsFactory $logsFactory, \Mageplaza\AbandonedCart\Model\AbandonedCart $abandonedCartModel)
    {
        $this->___init();
        parent::__construct($context, $resultPageFactory, $jsonHelper, $logger, $abandonedCartLog, $logsFactory, $abandonedCartModel);
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
