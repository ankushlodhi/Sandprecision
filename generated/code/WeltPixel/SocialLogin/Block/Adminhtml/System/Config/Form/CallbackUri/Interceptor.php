<?php
namespace WeltPixel\SocialLogin\Block\Adminhtml\System\Config\Form\CallbackUri;

/**
 * Interceptor class for @see \WeltPixel\SocialLogin\Block\Adminhtml\System\Config\Form\CallbackUri
 */
class Interceptor extends \WeltPixel\SocialLogin\Block\Adminhtml\System\Config\Form\CallbackUri implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\WeltPixel\SocialLogin\Helper\Data $slHelper, \Magento\Backend\Block\Template\Context $context, array $data = [])
    {
        $this->___init();
        parent::__construct($slHelper, $context, $data);
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
