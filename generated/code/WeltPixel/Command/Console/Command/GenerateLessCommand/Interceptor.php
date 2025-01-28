<?php
namespace WeltPixel\Command\Console\Command\GenerateLessCommand;

/**
 * Interceptor class for @see \WeltPixel\Command\Console\Command\GenerateLessCommand
 */
class Interceptor extends \WeltPixel\Command\Console\Command\GenerateLessCommand implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\WeltPixel\Command\Model\AreaCode $areaCode, \Magento\Framework\ObjectManagerInterface $objectManager, \Magento\Framework\App\State $state, array $generationContainer = [])
    {
        $this->___init();
        parent::__construct($areaCode, $objectManager, $state, $generationContainer);
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
