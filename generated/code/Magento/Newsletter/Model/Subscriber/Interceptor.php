<?php
namespace Magento\Newsletter\Model\Subscriber;

/**
 * Interceptor class for @see \Magento\Newsletter\Model\Subscriber
 */
class Interceptor extends \Magento\Newsletter\Model\Subscriber implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Model\Context $context, \Magento\Framework\Registry $registry, \Magento\Newsletter\Helper\Data $newsletterData, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, \Magento\Framework\Mail\Template\TransportBuilder $transportBuilder, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Customer\Model\Session $customerSession, \Magento\Customer\Api\CustomerRepositoryInterface $customerRepository, \Magento\Customer\Api\AccountManagementInterface $customerAccountManagement, \Magento\Framework\Translate\Inline\StateInterface $inlineTranslation, ?\Magento\Framework\Model\ResourceModel\AbstractResource $resource = null, ?\Magento\Framework\Data\Collection\AbstractDb $resourceCollection = null, array $data = [], ?\Magento\Framework\Stdlib\DateTime\DateTime $dateTime = null, ?\Magento\Customer\Api\Data\CustomerInterfaceFactory $customerFactory = null, ?\Magento\Framework\Api\DataObjectHelper $dataObjectHelper = null, ?\Magento\Newsletter\Model\SubscriptionManagerInterface $subscriptionManager = null)
    {
        $this->___init();
        parent::__construct($context, $registry, $newsletterData, $scopeConfig, $transportBuilder, $storeManager, $customerSession, $customerRepository, $customerAccountManagement, $inlineTranslation, $resource, $resourceCollection, $data, $dateTime, $customerFactory, $dataObjectHelper, $subscriptionManager);
    }

    /**
     * {@inheritdoc}
     */
    public function loadBySubscriberEmail(string $email, int $websiteId) : \Magento\Newsletter\Model\Subscriber
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'loadBySubscriberEmail');
        return $pluginInfo ? $this->___callPlugins('loadBySubscriberEmail', func_get_args(), $pluginInfo) : parent::loadBySubscriberEmail($email, $websiteId);
    }

    /**
     * {@inheritdoc}
     */
    public function loadByCustomer(int $customerId, int $websiteId) : \Magento\Newsletter\Model\Subscriber
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'loadByCustomer');
        return $pluginInfo ? $this->___callPlugins('loadByCustomer', func_get_args(), $pluginInfo) : parent::loadByCustomer($customerId, $websiteId);
    }

    /**
     * {@inheritdoc}
     */
    public function unsubscribe()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'unsubscribe');
        return $pluginInfo ? $this->___callPlugins('unsubscribe', func_get_args(), $pluginInfo) : parent::unsubscribe();
    }

    /**
     * {@inheritdoc}
     */
    public function delete()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'delete');
        return $pluginInfo ? $this->___callPlugins('delete', func_get_args(), $pluginInfo) : parent::delete();
    }
}
