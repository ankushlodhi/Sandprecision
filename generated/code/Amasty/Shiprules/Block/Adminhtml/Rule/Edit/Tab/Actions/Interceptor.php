<?php
namespace Amasty\Shiprules\Block\Adminhtml\Rule\Edit\Tab\Actions;

/**
 * Interceptor class for @see \Amasty\Shiprules\Block\Adminhtml\Rule\Edit\Tab\Actions
 */
class Interceptor extends \Amasty\Shiprules\Block\Adminhtml\Rule\Edit\Tab\Actions implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Data\FormFactory $formFactory, \Amasty\CommonRules\Model\OptionProvider\Pool $poolOptionProvider, \Magento\Rule\Block\Actions $actions, \Magento\Backend\Block\Widget\Form\Renderer\Fieldset $rendererFieldset, \Amasty\Base\Helper\Module $moduleHelper, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $registry, $formFactory, $poolOptionProvider, $actions, $rendererFieldset, $moduleHelper, $data);
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
