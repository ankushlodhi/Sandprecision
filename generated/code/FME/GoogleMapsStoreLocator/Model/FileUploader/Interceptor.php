<?php
namespace FME\GoogleMapsStoreLocator\Model\FileUploader;

/**
 * Interceptor class for @see \FME\GoogleMapsStoreLocator\Model\FileUploader
 */
class Interceptor extends \FME\GoogleMapsStoreLocator\Model\FileUploader implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\MediaStorage\Helper\File\Storage\Database $coreFileStorageDatabase, \Magento\Framework\Filesystem $filesystem, \Magento\MediaStorage\Model\File\UploaderFactory $uploaderFactory, \Magento\Store\Model\StoreManagerInterface $storeManager, \Psr\Log\LoggerInterface $logger, $baseTmpPath, $basePath, $allowedExtensions, $allowedMimeTypes = [], ?\Magento\Framework\File\Name $fileNameLookup = null)
    {
        $this->___init();
        parent::__construct($coreFileStorageDatabase, $filesystem, $uploaderFactory, $storeManager, $logger, $baseTmpPath, $basePath, $allowedExtensions, $allowedMimeTypes, $fileNameLookup);
    }

    /**
     * {@inheritdoc}
     */
    public function moveFileFromTmp($imageName, $returnRelativePath = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'moveFileFromTmp');
        return $pluginInfo ? $this->___callPlugins('moveFileFromTmp', func_get_args(), $pluginInfo) : parent::moveFileFromTmp($imageName, $returnRelativePath);
    }
}
