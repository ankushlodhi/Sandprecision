<?php
namespace Magento\Newsletter\Model\SubscriptionManager;

/**
 * Interceptor class for @see \Magento\Newsletter\Model\SubscriptionManager
 */
class Interceptor extends \Magento\Newsletter\Model\SubscriptionManager implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Newsletter\Model\SubscriberFactory $subscriberFactory, \Psr\Log\LoggerInterface $logger, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, \Magento\Customer\Api\AccountManagementInterface $customerAccountManagement, \Magento\Customer\Api\CustomerRepositoryInterface $customerRepository, ?\Magento\Newsletter\Model\CustomerSubscriberCache $customerSubscriberCache = null)
    {
        $this->___init();
        parent::__construct($subscriberFactory, $logger, $storeManager, $scopeConfig, $customerAccountManagement, $customerRepository, $customerSubscriberCache);
    }

    /**
     * {@inheritdoc}
     */
    public function subscribe(string $email, int $storeId) : \Magento\Newsletter\Model\Subscriber
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'subscribe');
        return $pluginInfo ? $this->___callPlugins('subscribe', func_get_args(), $pluginInfo) : parent::subscribe($email, $storeId);
    }

    /**
     * {@inheritdoc}
     */
    public function unsubscribe(string $email, int $storeId, string $confirmCode) : \Magento\Newsletter\Model\Subscriber
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'unsubscribe');
        return $pluginInfo ? $this->___callPlugins('unsubscribe', func_get_args(), $pluginInfo) : parent::unsubscribe($email, $storeId, $confirmCode);
    }

    /**
     * {@inheritdoc}
     */
    public function subscribeCustomer(int $customerId, int $storeId) : \Magento\Newsletter\Model\Subscriber
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'subscribeCustomer');
        return $pluginInfo ? $this->___callPlugins('subscribeCustomer', func_get_args(), $pluginInfo) : parent::subscribeCustomer($customerId, $storeId);
    }

    /**
     * {@inheritdoc}
     */
    public function unsubscribeCustomer(int $customerId, int $storeId) : \Magento\Newsletter\Model\Subscriber
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'unsubscribeCustomer');
        return $pluginInfo ? $this->___callPlugins('unsubscribeCustomer', func_get_args(), $pluginInfo) : parent::unsubscribeCustomer($customerId, $storeId);
    }
}
