<?php
namespace Lof\NextGenImages\Console\Command\ConvertCommand;

/**
 * Interceptor class for @see \Lof\NextGenImages\Console\Command\ConvertCommand
 */
class Interceptor extends \Lof\NextGenImages\Console\Command\ConvertCommand implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Lof\NextGenImages\Convertor\ConvertorListing $convertorListing, ?string $name = null)
    {
        $this->___init();
        parent::__construct($convertorListing, $name);
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
