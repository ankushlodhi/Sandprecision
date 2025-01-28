<?php
namespace Springbot\Queue\Console\Command\ListCommand;

/**
 * Interceptor class for @see \Springbot\Queue\Console\Command\ListCommand
 */
class Interceptor extends \Springbot\Queue\Console\Command\ListCommand implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\State $state, \Springbot\Queue\Model\Queue $queue, \Springbot\Queue\Model\ResourceModel\Job\Collection $jobCollection)
    {
        $this->___init();
        parent::__construct($state, $queue, $jobCollection);
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
