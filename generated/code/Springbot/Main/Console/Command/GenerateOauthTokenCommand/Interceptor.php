<?php
namespace Springbot\Main\Console\Command\GenerateOauthTokenCommand;

/**
 * Interceptor class for @see \Springbot\Main\Console\Command\GenerateOauthTokenCommand
 */
class Interceptor extends \Springbot\Main\Console\Command\GenerateOauthTokenCommand implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Springbot\Main\Model\Oauth $oauth)
    {
        $this->___init();
        parent::__construct($oauth);
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
