<?php
namespace Mageplaza\AbandonedCart\Controller\Adminhtml\Customer\MassUpdateBlacklistEmail;

/**
 * Interceptor class for @see \Mageplaza\AbandonedCart\Controller\Adminhtml\Customer\MassUpdateBlacklistEmail
 */
class Interceptor extends \Mageplaza\AbandonedCart\Controller\Adminhtml\Customer\MassUpdateBlacklistEmail implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Ui\Component\MassAction\Filter $filter, \Magento\Customer\Model\ResourceModel\Customer\CollectionFactory $collectionFactory, \Magento\Customer\Api\CustomerRepositoryInterface $customerRepository, \Mageplaza\AbandonedCart\Helper\Data $helperData)
    {
        $this->___init();
        parent::__construct($context, $filter, $collectionFactory, $customerRepository, $helperData);
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
