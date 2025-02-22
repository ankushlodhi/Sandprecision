<?php
namespace WeSupply\Toolbox\Block\System\Config\AccessKey;

/**
 * Interceptor class for @see \WeSupply\Toolbox\Block\System\Config\AccessKey
 */
class Interceptor extends \WeSupply\Toolbox\Block\System\Config\AccessKey implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \WeSupply\Toolbox\Helper\Data $helper, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $helper, $data);
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
