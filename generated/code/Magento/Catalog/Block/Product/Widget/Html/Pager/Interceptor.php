<?php
namespace Magento\Catalog\Block\Product\Widget\Html\Pager;

/**
 * Interceptor class for @see \Magento\Catalog\Block\Product\Widget\Html\Pager
 */
class Interceptor extends \Magento\Catalog\Block\Product\Widget\Html\Pager implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getLimit()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getLimit');
        return $pluginInfo ? $this->___callPlugins('getLimit', func_get_args(), $pluginInfo) : parent::getLimit();
    }

    /**
     * {@inheritdoc}
     */
    public function getAvailableLimit()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAvailableLimit');
        return $pluginInfo ? $this->___callPlugins('getAvailableLimit', func_get_args(), $pluginInfo) : parent::getAvailableLimit();
    }

    /**
     * {@inheritdoc}
     */
    public function isLimitCurrent($limit)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isLimitCurrent');
        return $pluginInfo ? $this->___callPlugins('isLimitCurrent', func_get_args(), $pluginInfo) : parent::isLimitCurrent($limit);
    }

    /**
     * {@inheritdoc}
     */
    public function getPageUrl($page)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getPageUrl');
        return $pluginInfo ? $this->___callPlugins('getPageUrl', func_get_args(), $pluginInfo) : parent::getPageUrl($page);
    }

    /**
     * {@inheritdoc}
     */
    public function getLimitUrl($limit)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getLimitUrl');
        return $pluginInfo ? $this->___callPlugins('getLimitUrl', func_get_args(), $pluginInfo) : parent::getLimitUrl($limit);
    }

    /**
     * {@inheritdoc}
     */
    public function canShowFirst()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canShowFirst');
        return $pluginInfo ? $this->___callPlugins('canShowFirst', func_get_args(), $pluginInfo) : parent::canShowFirst();
    }

    /**
     * {@inheritdoc}
     */
    public function canShowLast()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canShowLast');
        return $pluginInfo ? $this->___callPlugins('canShowLast', func_get_args(), $pluginInfo) : parent::canShowLast();
    }
}
