<?php
namespace Ebizmarts\MailChimp\Block\Adminhtml\Stores\Edit\Tab\Info;

/**
 * Interceptor class for @see \Ebizmarts\MailChimp\Block\Adminhtml\Stores\Edit\Tab\Info
 */
class Interceptor extends \Ebizmarts\MailChimp\Block\Adminhtml\Stores\Edit\Tab\Info implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Data\FormFactory $formFactory, \Magento\Config\Model\Config\Source\Locale\Timezone $timezone, \Magento\Config\Model\Config\Source\Yesno $yesno, \Magento\Config\Model\Config\Source\Locale\Currency $currency, \Magento\Config\Model\Config\Source\Locale $locale, \Ebizmarts\MailChimp\Model\Config\Source\ApiKey $apiKey, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $registry, $formFactory, $timezone, $yesno, $currency, $locale, $apiKey, $data);
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
