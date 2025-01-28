<?php
namespace Magento\Framework\View\Page\Config\Reader\Head;

/**
 * Interceptor class for @see \Magento\Framework\View\Page\Config\Reader\Head
 */
class Interceptor extends \Magento\Framework\View\Page\Config\Reader\Head implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct()
    {
        $this->___init();
    }

    /**
     * {@inheritdoc}
     */
    public function interpret(\Magento\Framework\View\Layout\Reader\Context $readerContext, \Magento\Framework\View\Layout\Element $headElement)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'interpret');
        return $pluginInfo ? $this->___callPlugins('interpret', func_get_args(), $pluginInfo) : parent::interpret($readerContext, $headElement);
    }
}
