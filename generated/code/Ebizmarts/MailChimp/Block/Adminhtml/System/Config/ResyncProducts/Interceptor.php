<?php
namespace Ebizmarts\MailChimp\Block\Adminhtml\System\Config\ResyncProducts;

/**
 * Interceptor class for @see \Ebizmarts\MailChimp\Block\Adminhtml\System\Config\ResyncProducts
 */
class Interceptor extends \Ebizmarts\MailChimp\Block\Adminhtml\System\Config\ResyncProducts implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Ebizmarts\MailChimp\Helper\Data $helper, array $data = [])
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
