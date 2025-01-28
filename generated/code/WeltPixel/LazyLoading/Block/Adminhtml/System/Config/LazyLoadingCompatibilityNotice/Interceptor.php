<?php
namespace WeltPixel\LazyLoading\Block\Adminhtml\System\Config\LazyLoadingCompatibilityNotice;

/**
 * Interceptor class for @see \WeltPixel\LazyLoading\Block\Adminhtml\System\Config\LazyLoadingCompatibilityNotice
 */
class Interceptor extends \WeltPixel\LazyLoading\Block\Adminhtml\System\Config\LazyLoadingCompatibilityNotice implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Module\Manager $moduleManager, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $moduleManager, $data);
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
