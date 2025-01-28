<?php
namespace Magento\Csp\Model\Collector\DynamicCollector;

/**
 * Interceptor class for @see \Magento\Csp\Model\Collector\DynamicCollector
 */
class Interceptor extends \Magento\Csp\Model\Collector\DynamicCollector implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Csp\Model\Collector\MergerInterface $merger)
    {
        $this->___init();
        parent::__construct($merger);
    }

    /**
     * {@inheritdoc}
     */
    public function collect(array $defaultPolicies = []) : array
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'collect');
        return $pluginInfo ? $this->___callPlugins('collect', func_get_args(), $pluginInfo) : parent::collect($defaultPolicies);
    }
}
