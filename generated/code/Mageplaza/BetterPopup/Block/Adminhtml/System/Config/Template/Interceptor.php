<?php
namespace Mageplaza\BetterPopup\Block\Adminhtml\System\Config\Template;

/**
 * Interceptor class for @see \Mageplaza\BetterPopup\Block\Adminhtml\System\Config\Template
 */
class Interceptor extends \Mageplaza\BetterPopup\Block\Adminhtml\System\Config\Template implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Mageplaza\BetterPopup\Helper\Data $helperData, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $helperData, $data);
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
