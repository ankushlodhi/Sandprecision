<?php
namespace Mageplaza\AbandonedCart\Block\Adminhtml\Config\Backend\Email;

/**
 * Interceptor class for @see \Mageplaza\AbandonedCart\Block\Adminhtml\Config\Backend\Email
 */
class Interceptor extends \Mageplaza\AbandonedCart\Block\Adminhtml\Config\Backend\Email implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Data\Form\Element\Factory $elementFactory, \Magento\Email\Model\ResourceModel\Template\CollectionFactory $templatesFactory, \Magento\Config\Model\Config\Source\Email\Identity $emailIdentity, \Magento\Email\Model\Template\Config $emailConfig, \Magento\Config\Model\Config\Source\Yesno $yesno, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $elementFactory, $templatesFactory, $emailIdentity, $emailConfig, $yesno, $data);
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
