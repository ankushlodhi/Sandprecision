<?php
namespace WeltPixel\SmartProductTabs\Block\Adminhtml\SmartProductTabs\Edit\Tab\Conditions;

/**
 * Interceptor class for @see \WeltPixel\SmartProductTabs\Block\Adminhtml\SmartProductTabs\Edit\Tab\Conditions
 */
class Interceptor extends \WeltPixel\SmartProductTabs\Block\Adminhtml\SmartProductTabs\Edit\Tab\Conditions implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Data\FormFactory $formFactory, \Magento\Rule\Block\Conditions $conditions, \Magento\Backend\Block\Widget\Form\Renderer\Fieldset $rendererFieldset, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $registry, $formFactory, $conditions, $rendererFieldset, $data);
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
