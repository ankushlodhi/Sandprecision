<?php
namespace WeltPixel\Command\Console\Command\ThemeSetupCommand;

/**
 * Interceptor class for @see \WeltPixel\Command\Console\Command\ThemeSetupCommand
 */
class Interceptor extends \WeltPixel\Command\Console\Command\ThemeSetupCommand implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\File\Csv $csvFile, \Magento\Config\Model\ResourceModel\Config $resourceConfig, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Framework\Component\ComponentRegistrarInterface $componentRegistrar, \Magento\Theme\Model\ResourceModel\Theme\CollectionFactory $themeFactory, \Magento\Framework\Serialize\Serializer\Serialize $serializer)
    {
        $this->___init();
        parent::__construct($csvFile, $resourceConfig, $storeManager, $componentRegistrar, $themeFactory, $serializer);
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
