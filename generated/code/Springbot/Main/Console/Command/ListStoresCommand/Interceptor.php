<?php
namespace Springbot\Main\Console\Command\ListStoresCommand;

/**
 * Interceptor class for @see \Springbot\Main\Console\Command\ListStoresCommand
 */
class Interceptor extends \Springbot\Main\Console\Command\ListStoresCommand implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Springbot\Main\Model\Oauth $oauth, \Magento\Store\Model\StoreManagerInterface $storeManager, \Springbot\Main\Model\StoreConfiguration $storeConfig, \Springbot\Main\Helper\Data $springbotHelper)
    {
        $this->___init();
        parent::__construct($oauth, $storeManager, $storeConfig, $springbotHelper);
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
