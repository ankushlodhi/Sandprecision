<?php
namespace Swissup\Marketplace\Model\ResourceModel\Package\Collection;

/**
 * Interceptor class for @see \Swissup\Marketplace\Model\ResourceModel\Package\Collection
 */
class Interceptor extends \Swissup\Marketplace\Model\ResourceModel\Package\Collection implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Data\Collection\EntityFactoryInterface $entityFactory, \Swissup\Marketplace\Installer\Installer $installer, \Swissup\Marketplace\Model\PackagesList\Local $localPackages, \Swissup\Marketplace\Model\PackagesList\Remote $remotePackages)
    {
        $this->___init();
        parent::__construct($entityFactory, $installer, $localPackages, $remotePackages);
    }

    /**
     * {@inheritdoc}
     */
    public function getCurPage($displacement = 0)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCurPage');
        return $pluginInfo ? $this->___callPlugins('getCurPage', func_get_args(), $pluginInfo) : parent::getCurPage($displacement);
    }
}
