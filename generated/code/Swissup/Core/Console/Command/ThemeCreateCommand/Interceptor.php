<?php
namespace Swissup\Core\Console\Command\ThemeCreateCommand;

/**
 * Interceptor class for @see \Swissup\Core\Console\Command\ThemeCreateCommand
 */
class Interceptor extends \Swissup\Core\Console\Command\ThemeCreateCommand implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Swissup\Core\Console\Command\ThemeCreate $create, $name = null)
    {
        $this->___init();
        parent::__construct($create, $name);
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
