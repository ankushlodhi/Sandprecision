<?php
namespace Ebizmarts\MailChimp\Controller\Adminhtml\Ecommerce\CleanEcommerce;

/**
 * Interceptor class for @see \Ebizmarts\MailChimp\Controller\Adminhtml\Ecommerce\CleanEcommerce
 */
class Interceptor extends \Ebizmarts\MailChimp\Controller\Adminhtml\Ecommerce\CleanEcommerce implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory, \Ebizmarts\MailChimp\Model\ResourceModel\MailChimpSyncEcommerce\CollectionFactory $collectionFactory, \Ebizmarts\MailChimp\Model\MailChimpSyncEcommerce $chimpSyncEcommerce, \Ebizmarts\MailChimp\Helper\Data $helper)
    {
        $this->___init();
        parent::__construct($context, $resultJsonFactory, $collectionFactory, $chimpSyncEcommerce, $helper);
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
