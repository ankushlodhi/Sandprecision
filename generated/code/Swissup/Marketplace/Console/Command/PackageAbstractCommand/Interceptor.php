<?php
namespace Swissup\Marketplace\Console\Command\PackageAbstractCommand;

/**
 * Interceptor class for @see \Swissup\Marketplace\Console\Command\PackageAbstractCommand
 */
class Interceptor extends \Swissup\Marketplace\Console\Command\PackageAbstractCommand implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Swissup\Marketplace\Model\HandlerFactory $handlerFactory, \Swissup\Marketplace\Helper\Composer $composerHelper)
    {
        $this->___init();
        parent::__construct($handlerFactory, $composerHelper);
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
