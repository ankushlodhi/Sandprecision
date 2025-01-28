<?php
namespace Swissup\Core\Console\Command\ModuleListCommand;

/**
 * Interceptor class for @see \Swissup\Core\Console\Command\ModuleListCommand
 */
class Interceptor extends \Swissup\Core\Console\Command\ModuleListCommand implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Swissup\Core\Model\ComponentList\Loader $loader)
    {
        $this->___init();
        parent::__construct($loader);
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
