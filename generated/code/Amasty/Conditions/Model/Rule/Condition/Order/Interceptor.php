<?php
namespace Amasty\Conditions\Model\Rule\Condition\Order;

/**
 * Interceptor class for @see \Amasty\Conditions\Model\Rule\Condition\Order
 */
class Interceptor extends \Amasty\Conditions\Model\Rule\Condition\Order implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Rule\Model\Condition\Context $context, \Amasty\Conditions\Model\Order\ResourceModel\CollectionFactory $reportsFactory, \Magento\SalesRule\Model\Rule\Condition\Product $ruleConditionProduct, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $reportsFactory, $ruleConditionProduct, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getNewChildSelectOptions()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getNewChildSelectOptions');
        return $pluginInfo ? $this->___callPlugins('getNewChildSelectOptions', func_get_args(), $pluginInfo) : parent::getNewChildSelectOptions();
    }
}
