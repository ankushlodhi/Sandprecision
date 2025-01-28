<?php
namespace Magento\SalesRule\Model\Rule\Condition\Product\Subselect;

/**
 * Interceptor class for @see \Magento\SalesRule\Model\Rule\Condition\Product\Subselect
 */
class Interceptor extends \Magento\SalesRule\Model\Rule\Condition\Product\Subselect implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Rule\Model\Condition\Context $context, \Magento\SalesRule\Model\Rule\Condition\Product $ruleConditionProduct, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $ruleConditionProduct, $data);
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
