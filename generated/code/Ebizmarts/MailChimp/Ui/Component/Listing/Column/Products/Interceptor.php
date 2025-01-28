<?php
namespace Ebizmarts\MailChimp\Ui\Component\Listing\Column\Products;

/**
 * Interceptor class for @see \Ebizmarts\MailChimp\Ui\Component\Listing\Column\Products
 */
class Interceptor extends \Ebizmarts\MailChimp\Ui\Component\Listing\Column\Products implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\UiComponent\ContextInterface $context, \Magento\Framework\View\Element\UiComponentFactory $uiComponentFactory, \Magento\Catalog\Model\ProductFactory $productFactory, \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $productCollectionFactory, \Magento\Framework\App\RequestInterface $requestInterface, \Ebizmarts\MailChimp\Helper\Data $helper, \Magento\Framework\View\Asset\Repository $assetRepository, \Ebizmarts\MailChimp\Model\MailChimpErrorsFactory $mailChimpErrorsFactory, \Ebizmarts\MailChimp\Model\ResourceModel\MailChimpSyncEcommerce\CollectionFactory $syncCollectionFactory, array $components = [], array $data = [])
    {
        $this->___init();
        parent::__construct($context, $uiComponentFactory, $productFactory, $productCollectionFactory, $requestInterface, $helper, $assetRepository, $mailChimpErrorsFactory, $syncCollectionFactory, $components, $data);
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
