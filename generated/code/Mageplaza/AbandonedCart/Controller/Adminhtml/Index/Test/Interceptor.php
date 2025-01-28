<?php
namespace Mageplaza\AbandonedCart\Controller\Adminhtml\Index\Test;

/**
 * Interceptor class for @see \Mageplaza\AbandonedCart\Controller\Adminhtml\Index\Test
 */
class Interceptor extends \Mageplaza\AbandonedCart\Controller\Adminhtml\Index\Test implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Mageplaza\AbandonedCart\Helper\Data $helper, \Psr\Log\LoggerInterface $logger, \Mageplaza\AbandonedCart\Model\AbandonedCart $abandonedCart, \Magento\Quote\Model\ResourceModel\Quote\CollectionFactory $quoteCollection)
    {
        $this->___init();
        parent::__construct($context, $helper, $logger, $abandonedCart, $quoteCollection);
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
