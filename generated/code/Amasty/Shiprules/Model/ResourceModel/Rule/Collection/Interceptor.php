<?php
namespace Amasty\Shiprules\Model\ResourceModel\Rule\Collection;

/**
 * Interceptor class for @see \Amasty\Shiprules\Model\ResourceModel\Rule\Collection
 */
class Interceptor extends \Amasty\Shiprules\Model\ResourceModel\Rule\Collection implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Data\Collection\EntityFactoryInterface $entityFactory, \Psr\Log\LoggerInterface $logger, \Magento\Framework\Data\Collection\Db\FetchStrategyInterface $fetchStrategy, \Magento\Framework\Event\ManagerInterface $eventManager, \Magento\Framework\Stdlib\DateTime\DateTime $coreDate, \Magento\Framework\Stdlib\DateTime\TimezoneInterface $localeDate, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Framework\App\State $state, \Magento\Customer\Api\CustomerRepositoryInterface $customerRepositoryInterface)
    {
        $this->___init();
        parent::__construct($entityFactory, $logger, $fetchStrategy, $eventManager, $coreDate, $localeDate, $storeManager, $state, $customerRepositoryInterface);
    }

    /**
     * {@inheritdoc}
     */
    public function getCurPage($displacement = 0)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCurPage');
        return $pluginInfo ? $this->___callPlugins('getCurPage', func_get_args(), $pluginInfo) : parent::getCurPage($displacement);
    }
}
