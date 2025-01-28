<?php
namespace Amasty\CommonRules\Model\Rule\Condition\Product\Subselect;

/**
 * Interceptor class for @see \Amasty\CommonRules\Model\Rule\Condition\Product\Subselect
 */
class Interceptor extends \Amasty\CommonRules\Model\Rule\Condition\Product\Subselect implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Rule\Model\Condition\Context $context, \Amasty\CommonRules\Model\Rule\Condition\Product $ruleConditionProduct, \Amasty\CommonRules\Model\Rule\Condition\ConditionBuilder $conditionBuilder, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $ruleConditionProduct, $conditionBuilder, $data);
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
