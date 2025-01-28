<?php
namespace Ebizmarts\MailChimp\Ui\Component\Listing\Column\Customers;

/**
 * Interceptor class for @see \Ebizmarts\MailChimp\Ui\Component\Listing\Column\Customers
 */
class Interceptor extends \Ebizmarts\MailChimp\Ui\Component\Listing\Column\Customers implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\UiComponent\ContextInterface $context, \Magento\Framework\View\Element\UiComponentFactory $uiComponentFactory, \Magento\Framework\App\RequestInterface $requestInterface, \Magento\Framework\View\Asset\Repository $assetRepository, \Magento\Customer\Model\CustomerFactory $customerFactory, \Ebizmarts\MailChimp\Helper\Data $helper, \Ebizmarts\MailChimp\Helper\Sync $syncHelper, \Ebizmarts\MailChimp\Model\MailChimpErrorsFactory $mailChimpErrorsFactory, array $components = [], array $data = [])
    {
        $this->___init();
        parent::__construct($context, $uiComponentFactory, $requestInterface, $assetRepository, $customerFactory, $helper, $syncHelper, $mailChimpErrorsFactory, $components, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function prepare()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'prepare');
        return $pluginInfo ? $this->___callPlugins('prepare', func_get_args(), $pluginInfo) : parent::prepare();
    }
}
