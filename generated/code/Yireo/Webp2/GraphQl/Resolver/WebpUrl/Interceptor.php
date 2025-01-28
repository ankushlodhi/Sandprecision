<?php
namespace Yireo\Webp2\GraphQl\Resolver\WebpUrl;

/**
 * Interceptor class for @see \Yireo\Webp2\GraphQl\Resolver\WebpUrl
 */
class Interceptor extends \Yireo\Webp2\GraphQl\Resolver\WebpUrl implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\CatalogGraphQl\Model\Resolver\Product\MediaGallery\Url $urlResolver, \Yireo\NextGenImages\Config\Config $config, \Yireo\NextGenImages\Image\ImageFactory $imageFactory, \Yireo\Webp2\Convertor\Convertor $convertor)
    {
        $this->___init();
        parent::__construct($urlResolver, $config, $imageFactory, $convertor);
    }

    /**
     * {@inheritdoc}
     */
    public function resolve(\Magento\Framework\GraphQl\Config\Element\Field $field, $context, \Magento\Framework\GraphQl\Schema\Type\ResolveInfo $info, ?array $value = null, ?array $args = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'resolve');
        return $pluginInfo ? $this->___callPlugins('resolve', func_get_args(), $pluginInfo) : parent::resolve($field, $context, $info, $value, $args);
    }
}
