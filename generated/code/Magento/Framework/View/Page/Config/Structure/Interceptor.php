<?php
namespace Magento\Framework\View\Page\Config\Structure;

/**
 * Interceptor class for @see \Magento\Framework\View\Page\Config\Structure
 */
class Interceptor extends \Magento\Framework\View\Page\Config\Structure implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct()
    {
        $this->___init();
    }

    /**
     * {@inheritdoc}
     */
    public function getMetadata()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getMetadata');
        return $pluginInfo ? $this->___callPlugins('getMetadata', func_get_args(), $pluginInfo) : parent::getMetadata();
    }

    /**
     * {@inheritdoc}
     */
    public function addAssets($name, $attributes)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addAssets');
        return $pluginInfo ? $this->___callPlugins('addAssets', func_get_args(), $pluginInfo) : parent::addAssets($name, $attributes);
    }
}
