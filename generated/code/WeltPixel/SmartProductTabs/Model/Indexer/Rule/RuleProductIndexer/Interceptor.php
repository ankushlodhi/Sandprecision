<?php
namespace WeltPixel\SmartProductTabs\Model\Indexer\Rule\RuleProductIndexer;

/**
 * Interceptor class for @see \WeltPixel\SmartProductTabs\Model\Indexer\Rule\RuleProductIndexer
 */
class Interceptor extends \WeltPixel\SmartProductTabs\Model\Indexer\Rule\RuleProductIndexer implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\WeltPixel\SmartProductTabs\Model\Indexer\IndexBuilder $indexBuilder)
    {
        $this->___init();
        parent::__construct($indexBuilder);
    }

    /**
     * {@inheritdoc}
     */
    public function executeFull()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'executeFull');
        return $pluginInfo ? $this->___callPlugins('executeFull', func_get_args(), $pluginInfo) : parent::executeFull();
    }

    /**
     * {@inheritdoc}
     */
    public function executeList(array $ids)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'executeList');
        return $pluginInfo ? $this->___callPlugins('executeList', func_get_args(), $pluginInfo) : parent::executeList($ids);
    }

    /**
     * {@inheritdoc}
     */
    public function executeRow($id)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'executeRow');
        return $pluginInfo ? $this->___callPlugins('executeRow', func_get_args(), $pluginInfo) : parent::executeRow($id);
    }
}
