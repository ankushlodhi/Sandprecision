<?php
namespace Springbot\Main\Console\Command\RegisterStoresCommand;

/**
 * Interceptor class for @see \Springbot\Main\Console\Command\RegisterStoresCommand
 */
class Interceptor extends \Springbot\Main\Console\Command\RegisterStoresCommand implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Store\Model\StoreManagerInterface $storeManager, \Springbot\Main\Model\Register $register, \Springbot\Main\Model\StoreConfiguration $storeConfig, \Springbot\Main\Helper\Data $springbotHelper)
    {
        $this->___init();
        parent::__construct($storeManager, $register, $storeConfig, $springbotHelper);
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
