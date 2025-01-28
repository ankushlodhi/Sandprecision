<?php
namespace Mageplaza\AbandonedCart\Ui\Component\Listing\Column\Thumbnail;

/**
 * Interceptor class for @see \Mageplaza\AbandonedCart\Ui\Component\Listing\Column\Thumbnail
 */
class Interceptor extends \Mageplaza\AbandonedCart\Ui\Component\Listing\Column\Thumbnail implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\UiComponent\ContextInterface $context, \Magento\Framework\View\Element\UiComponentFactory $uiComponentFactory, \Magento\Catalog\Helper\Image $imageHelper, \Magento\Framework\UrlInterface $urlBuilder, \Magento\Catalog\Model\ProductFactory $productFactory, \Magento\Catalog\Model\ResourceModel\Product $productResource, array $components = [], array $data = [])
    {
        $this->___init();
        parent::__construct($context, $uiComponentFactory, $imageHelper, $urlBuilder, $productFactory, $productResource, $components, $data);
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
