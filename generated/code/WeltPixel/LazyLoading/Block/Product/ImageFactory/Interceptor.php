<?php
namespace WeltPixel\LazyLoading\Block\Product\ImageFactory;

/**
 * Interceptor class for @see \WeltPixel\LazyLoading\Block\Product\ImageFactory
 */
class Interceptor extends \WeltPixel\LazyLoading\Block\Product\ImageFactory implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, \Magento\Framework\View\ConfigInterface $presentationConfig, \Magento\Catalog\Model\View\Asset\ImageFactory $viewAssetImageFactory, \Magento\Catalog\Model\View\Asset\PlaceholderFactory $viewAssetPlaceholderFactory, \Magento\Catalog\Model\Product\Image\ParamsBuilder $imageParamsBuilder, \WeltPixel\LazyLoading\Helper\Data $lazyLoadingHelper)
    {
        $this->___init();
        parent::__construct($objectManager, $presentationConfig, $viewAssetImageFactory, $viewAssetPlaceholderFactory, $imageParamsBuilder, $lazyLoadingHelper);
    }

    /**
     * {@inheritdoc}
     */
    public function create(\Magento\Catalog\Model\Product $product, string $imageId, ?array $attributes = null) : \Magento\Catalog\Block\Product\Image
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'create');
        return $pluginInfo ? $this->___callPlugins('create', func_get_args(), $pluginInfo) : parent::create($product, $imageId, $attributes);
    }
}
