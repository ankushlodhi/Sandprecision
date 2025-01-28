<?php
namespace Amasty\CommonRules\Block\Adminhtml\Rule\Edit\Tab\Daystime;

/**
 * Interceptor class for @see \Amasty\CommonRules\Block\Adminhtml\Rule\Edit\Tab\Daystime
 */
class Interceptor extends \Amasty\CommonRules\Block\Adminhtml\Rule\Edit\Tab\Daystime implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Data\FormFactory $formFactory, \Amasty\CommonRules\Model\OptionProvider\Pool $poolOptionProvider, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $registry, $formFactory, $poolOptionProvider, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getForm()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getForm');
        return $pluginInfo ? $this->___callPlugins('getForm', func_get_args(), $pluginInfo) : parent::getForm();
    }
}
