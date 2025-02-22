<?php
namespace WeltPixel\SpeedOptimization\Block\System\Config\AdvancedBundling;

/**
 * Interceptor class for @see \WeltPixel\SpeedOptimization\Block\System\Config\AdvancedBundling
 */
class Interceptor extends \WeltPixel\SpeedOptimization\Block\System\Config\AdvancedBundling implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\WeltPixel\Backend\Helper\Utility $utilityHelper, \Magento\Backend\Block\Template\Context $context, array $data = [])
    {
        $this->___init();
        parent::__construct($utilityHelper, $context, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function render(\Magento\Framework\Data\Form\Element\AbstractElement $element)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'render');
        return $pluginInfo ? $this->___callPlugins('render', func_get_args(), $pluginInfo) : parent::render($element);
    }
}
