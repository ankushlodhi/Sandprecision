<?php
namespace Mageplaza\AbandonedCart\Block\Adminhtml\Customer\Edit\Tab\AbandonedCartBlacklist;

/**
 * Interceptor class for @see \Mageplaza\AbandonedCart\Block\Adminhtml\Customer\Edit\Tab\AbandonedCartBlacklist
 */
class Interceptor extends \Mageplaza\AbandonedCart\Block\Adminhtml\Customer\Edit\Tab\AbandonedCartBlacklist implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Data\FormFactory $formFactory, \Mageplaza\AbandonedCart\Helper\Data $helperData, \Magento\Customer\Model\CustomerFactory $customerFactory, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $registry, $formFactory, $helperData, $customerFactory, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getForm()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getForm');
        return $pluginInfo ? $this->___callPlugins('getForm', func_get_args(), $pluginInfo) : parent::getForm();
    }
}
