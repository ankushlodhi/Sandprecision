<?php
namespace Ebizmarts\MailChimp\Model\Config\Backend\MonkeyStore;

/**
 * Interceptor class for @see \Ebizmarts\MailChimp\Model\Config\Backend\MonkeyStore
 */
class Interceptor extends \Ebizmarts\MailChimp\Model\Config\Backend\MonkeyStore implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Model\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\App\Config\ScopeConfigInterface $config, \Magento\Framework\App\Cache\TypeListInterface $cacheTypeList, \Magento\Config\Model\ResourceModel\Config $resourceConfig, ?\Magento\Framework\Model\ResourceModel\AbstractResource $resource, ?\Magento\Framework\Data\Collection\AbstractDb $resourceCollection, \Magento\Framework\Stdlib\DateTime\DateTime $date, \Ebizmarts\MailChimp\Helper\Data $helper, \Ebizmarts\MailChimp\Helper\Sync $syncHelper, \Magento\Store\Model\StoreManager $storeManager, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $registry, $config, $cacheTypeList, $resourceConfig, $resource, $resourceCollection, $date, $helper, $syncHelper, $storeManager, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function afterSave()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'afterSave');
        return $pluginInfo ? $this->___callPlugins('afterSave', func_get_args(), $pluginInfo) : parent::afterSave();
    }

    /**
     * {@inheritdoc}
     */
    public function save()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'save');
        return $pluginInfo ? $this->___callPlugins('save', func_get_args(), $pluginInfo) : parent::save();
    }
}
