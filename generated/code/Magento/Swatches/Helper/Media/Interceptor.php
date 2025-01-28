<?php
namespace Magento\Swatches\Helper\Media;

/**
 * Interceptor class for @see \Magento\Swatches\Helper\Media
 */
class Interceptor extends \Magento\Swatches\Helper\Media implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Model\Product\Media\Config $mediaConfig, \Magento\Framework\Filesystem $filesystem, \Magento\MediaStorage\Helper\File\Storage\Database $fileStorageDb, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Framework\Image\Factory $imageFactory, \Magento\Theme\Model\ResourceModel\Theme\Collection $themeCollection, \Magento\Framework\View\ConfigInterface $configInterface, ?\Magento\Catalog\Model\Config\CatalogMediaConfig $catalogMediaConfig = null)
    {
        $this->___init();
        parent::__construct($mediaConfig, $filesystem, $fileStorageDb, $storeManager, $imageFactory, $themeCollection, $configInterface, $catalogMediaConfig);
    }

    /**
     * {@inheritdoc}
     */
    public function getImageConfig()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getImageConfig');
        return $pluginInfo ? $this->___callPlugins('getImageConfig', func_get_args(), $pluginInfo) : parent::getImageConfig();
    }
}
