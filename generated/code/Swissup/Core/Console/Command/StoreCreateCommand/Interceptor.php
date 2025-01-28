<?php
namespace Swissup\Core\Console\Command\StoreCreateCommand;

/**
 * Interceptor class for @see \Swissup\Core\Console\Command\StoreCreateCommand
 */
class Interceptor extends \Swissup\Core\Console\Command\StoreCreateCommand implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Store\Model\GroupFactory $groupFactory, \Magento\Store\Model\StoreFactory $storeFactory, \Magento\Framework\Filter\FilterManager $filterManager, $name = null)
    {
        $this->___init();
        parent::__construct($groupFactory, $storeFactory, $filterManager, $name);
    }

    /**
     * {@inheritdoc}
     */
    public function run(\Symfony\Component\Console\Input\InputInterface $input, \Symfony\Component\Console\Output\OutputInterface $output)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'run');
        return $pluginInfo ? $this->___callPlugins('run', func_get_args(), $pluginInfo) : parent::run($input, $output);
    }
}
