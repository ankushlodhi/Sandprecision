<?php
namespace Swissup\Recaptcha\Block\Adminhtml\Form\Field\DesignException;

/**
 * Interceptor class for @see \Swissup\Recaptcha\Block\Adminhtml\Form\Field\DesignException
 */
class Interceptor extends \Swissup\Recaptcha\Block\Adminhtml\Form\Field\DesignException implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, array $data = [], ?\Magento\Framework\View\Helper\SecureHtmlRenderer $secureRenderer = null)
    {
        $this->___init();
        parent::__construct($context, $data, $secureRenderer);
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
