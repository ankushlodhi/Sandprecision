<?php
namespace Magefan\Blog\Block\Adminhtml\System\Config\Form\Featured;

/**
 * Interceptor class for @see \Magefan\Blog\Block\Adminhtml\System\Config\Form\Featured
 */
class Interceptor extends \Magefan\Blog\Block\Adminhtml\System\Config\Form\Featured implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magefan\Community\Api\SecureHtmlRendererInterface $mfSecureRenderer, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $mfSecureRenderer, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function render(\Magento\Framework\Data\Form\Element\AbstractElement $element) : string
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'render');
        return $pluginInfo ? $this->___callPlugins('render', func_get_args(), $pluginInfo) : parent::render($element);
    }
}
