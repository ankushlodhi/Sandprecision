<?php
namespace Swissup\Marketplace\Console\Command\ComposerAuthImportCommand;

/**
 * Interceptor class for @see \Swissup\Marketplace\Console\Command\ComposerAuthImportCommand
 */
class Interceptor extends \Swissup\Marketplace\Console\Command\ComposerAuthImportCommand implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Swissup\Marketplace\Helper\Composer $composerHelper)
    {
        $this->___init();
        parent::__construct($composerHelper);
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
