<?php
namespace Mageplaza\AbandonedCart\Controller\Subscriber\Unsubscribe;

/**
 * Interceptor class for @see \Mageplaza\AbandonedCart\Controller\Subscriber\Unsubscribe
 */
class Interceptor extends \Mageplaza\AbandonedCart\Controller\Subscriber\Unsubscribe implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Framework\View\Result\PageFactory $resultPageFactory, \Mageplaza\AbandonedCart\Helper\Data $helperData, \Magento\Newsletter\Model\Subscriber $subscriber, \Magento\Framework\Encryption\EncryptorInterface $encryptor)
    {
        $this->___init();
        parent::__construct($context, $resultPageFactory, $helperData, $subscriber, $encryptor);
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
