<?php
namespace Ebizmarts\MailChimp\Block\Adminhtml\Stores\Edit\Tab\Address;

/**
 * Interceptor class for @see \Ebizmarts\MailChimp\Block\Adminhtml\Stores\Edit\Tab\Address
 */
class Interceptor extends \Ebizmarts\MailChimp\Block\Adminhtml\Stores\Edit\Tab\Address implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Data\FormFactory $formFactory, \Magento\Directory\Model\Config\Source\Country $country, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $registry, $formFactory, $country, $data);
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
