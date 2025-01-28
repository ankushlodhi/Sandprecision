<?php
namespace Swissup\Core\Console\Command\ModuleCommand;

/**
 * Interceptor class for @see \Swissup\Core\Console\Command\ModuleCommand
 */
class Interceptor extends \Swissup\Core\Console\Command\ModuleCommand implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Swissup\Core\Model\ComponentList\Loader $loader, \Swissup\Core\Model\ModuleFactory $moduleFactory)
    {
        $this->___init();
        parent::__construct($loader, $moduleFactory);
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
