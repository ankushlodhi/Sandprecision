<?php
namespace Ebizmarts\MailChimp\Ui\Component\Listing\Column\Monkey;

/**
 * Interceptor class for @see \Ebizmarts\MailChimp\Ui\Component\Listing\Column\Monkey
 */
class Interceptor extends \Ebizmarts\MailChimp\Ui\Component\Listing\Column\Monkey implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\UiComponent\ContextInterface $context, \Magento\Framework\View\Element\UiComponentFactory $uiComponentFactory, \Magento\Sales\Api\OrderRepositoryInterface $orderRepository, \Magento\Framework\View\Asset\Repository $assetRepository, \Magento\Framework\App\RequestInterface $requestInterface, \Magento\Framework\Api\SearchCriteriaBuilder $criteria, \Ebizmarts\MailChimp\Helper\Data $helper, \Ebizmarts\MailChimp\Model\ResourceModel\MailChimpSyncEcommerce\CollectionFactory $syncCommerceCF, \Ebizmarts\MailChimp\Model\MailChimpErrorsFactory $mailChimpErrorsFactory, \Magento\Sales\Model\OrderFactory $orderFactory, \Magento\Sales\Model\ResourceModel\Order\CollectionFactory $orderCollectionFactory, \Magento\Framework\UrlInterface $urlBuilder, \Ebizmarts\MailChimp\Model\ResourceModel\MailChimpSyncEcommerce\CollectionFactory $syncCollectionFactory, array $components = [], array $data = [])
    {
        $this->___init();
        parent::__construct($context, $uiComponentFactory, $orderRepository, $assetRepository, $requestInterface, $criteria, $helper, $syncCommerceCF, $mailChimpErrorsFactory, $orderFactory, $orderCollectionFactory, $urlBuilder, $syncCollectionFactory, $components, $data);
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
