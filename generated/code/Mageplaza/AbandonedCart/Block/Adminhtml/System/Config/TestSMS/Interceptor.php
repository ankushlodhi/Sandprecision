<?php
namespace Mageplaza\AbandonedCart\Block\Adminhtml\System\Config\TestSMS;

/**
 * Interceptor class for @see \Mageplaza\AbandonedCart\Block\Adminhtml\System\Config\TestSMS
 */
class Interceptor extends \Mageplaza\AbandonedCart\Block\Adminhtml\System\Config\TestSMS implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Mageplaza\AbandonedCart\Helper\Sms $smsHelper, array $data = [], ?\Magento\Framework\View\Helper\SecureHtmlRenderer $secureRenderer = null)
    {
        $this->___init();
        parent::__construct($context, $smsHelper, $data, $secureRenderer);
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
