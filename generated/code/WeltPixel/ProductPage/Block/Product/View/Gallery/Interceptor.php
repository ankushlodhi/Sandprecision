<?php
namespace WeltPixel\ProductPage\Block\Product\View\Gallery;

/**
 * Interceptor class for @see \WeltPixel\ProductPage\Block\Product\View\Gallery
 */
class Interceptor extends \WeltPixel\ProductPage\Block\Product\View\Gallery implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Block\Product\Context $context, \Magento\Framework\Stdlib\ArrayUtils $arrayUtils, \Magento\Framework\Json\EncoderInterface $jsonEncoder, \Magento\Framework\App\Request\Http $request, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $arrayUtils, $jsonEncoder, $request, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getMagnifier()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getMagnifier');
        return $pluginInfo ? $this->___callPlugins('getMagnifier', func_get_args(), $pluginInfo) : parent::getMagnifier();
    }

    /**
     * {@inheritdoc}
     */
    public function getGalleryImagesJson()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getGalleryImagesJson');
        return $pluginInfo ? $this->___callPlugins('getGalleryImagesJson', func_get_args(), $pluginInfo) : parent::getGalleryImagesJson();
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

    /**
     * {@inheritdoc}
     */
    public function getVar($name, $module = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getVar');
        return $pluginInfo ? $this->___callPlugins('getVar', func_get_args(), $pluginInfo) : parent::getVar($name, $module);
    }
}
