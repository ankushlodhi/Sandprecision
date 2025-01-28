<?php
namespace WeltPixel\ProductPage\Block\Adminhtml\Config\Form\Field\Conditions;

/**
 * Interceptor class for @see \WeltPixel\ProductPage\Block\Adminhtml\Config\Form\Field\Conditions
 */
class Interceptor extends \WeltPixel\ProductPage\Block\Adminhtml\Config\Form\Field\Conditions implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Data\Form\Element\Factory $elementFactory, \Magento\Rule\Block\Conditions $conditions, \Magento\CatalogWidget\Model\Rule $rule, \Magento\Framework\Serialize\Serializer\Json $serializer, \Magento\Backend\Block\Template\Context $context, array $data = [])
    {
        $this->___init();
        parent::__construct($elementFactory, $conditions, $rule, $serializer, $context, $data);
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
