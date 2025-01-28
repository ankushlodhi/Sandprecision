<?php
namespace WeltPixel\Command\Console\Command\GenerateCssCommand;

/**
 * Interceptor class for @see \WeltPixel\Command\Console\Command\GenerateCssCommand
 */
class Interceptor extends \WeltPixel\Command\Console\Command\GenerateCssCommand implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\WeltPixel\Command\Model\AreaCode $areaCode, \WeltPixel\Command\Model\GenerateCss $generateCss, \Magento\Framework\ObjectManagerInterface $objectManager, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, \Magento\Framework\View\Design\Theme\ThemeProviderInterface $themeProvider, \WeltPixel\Backend\Helper\Utility $utilityHelper)
    {
        $this->___init();
        parent::__construct($areaCode, $generateCss, $objectManager, $storeManager, $scopeConfig, $themeProvider, $utilityHelper);
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
