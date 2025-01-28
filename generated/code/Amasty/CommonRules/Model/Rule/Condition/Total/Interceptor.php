<?php
namespace Amasty\CommonRules\Model\Rule\Condition\Total;

/**
 * Interceptor class for @see \Amasty\CommonRules\Model\Rule\Condition\Total
 */
class Interceptor extends \Amasty\CommonRules\Model\Rule\Condition\Total implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Rule\Model\Condition\Context $context, \Magento\SalesRule\Model\Rule\Condition\Product $ruleConditionProduct, \Amasty\CommonRules\Model\Calculator $calculator, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $ruleConditionProduct, $calculator, $data);
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
