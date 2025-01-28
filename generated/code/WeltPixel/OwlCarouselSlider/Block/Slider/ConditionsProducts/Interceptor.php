<?php
namespace WeltPixel\OwlCarouselSlider\Block\Slider\ConditionsProducts;

/**
 * Interceptor class for @see \WeltPixel\OwlCarouselSlider\Block\Slider\ConditionsProducts
 */
class Interceptor extends \WeltPixel\OwlCarouselSlider\Block\Slider\ConditionsProducts implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Block\Product\Context $context, \WeltPixel\OwlCarouselSlider\Helper\Products $helperProducts, \WeltPixel\OwlCarouselSlider\Helper\Custom $helperCustom, \Magento\Catalog\Model\Product\Visibility $catalogProductVisibility, \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $productsCollectionFactory, \Magento\Reports\Model\ResourceModel\Product\CollectionFactory $reportsCollectionFactory, \Magento\Reports\Block\Product\Widget\Viewed $viewedProductsBlock, \Magento\Catalog\Model\CategoryFactory $categoryFactory, \WeltPixel\MobileDetect\Helper\Data $mobileHelperData, \Magento\Rule\Model\Condition\Sql\Builder $sqlBuilder, \Magento\CatalogWidget\Model\Rule $rule, \Magento\Widget\Helper\Conditions $conditionsHelper, \Magento\Catalog\Api\CategoryRepositoryInterface $categoryRepository, \Magento\Eav\Api\AttributeRepositoryInterface $attributeRepository, \Magento\Catalog\Model\Indexer\Product\Flat\State $flatState, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $helperProducts, $helperCustom, $catalogProductVisibility, $productsCollectionFactory, $reportsCollectionFactory, $viewedProductsBlock, $categoryFactory, $mobileHelperData, $sqlBuilder, $rule, $conditionsHelper, $categoryRepository, $attributeRepository, $flatState, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function isRedirectToCartEnabled()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isRedirectToCartEnabled');
        return $pluginInfo ? $this->___callPlugins('isRedirectToCartEnabled', func_get_args(), $pluginInfo) : parent::isRedirectToCartEnabled();
    }

    /**
     * {@inheritdoc}
     */
    public function getImage($product, $imageId, $attributes = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getImage');
        return $pluginInfo ? $this->___callPlugins('getImage', func_get_args(), $pluginInfo) : parent::getImage($product, $imageId, $attributes);
    }

    /**
     * {@inheritdoc}
     */
    public function toHtml()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toHtml');
        return $pluginInfo ? $this->___callPlugins('toHtml', func_get_args(), $pluginInfo) : parent::toHtml();
    }
}
