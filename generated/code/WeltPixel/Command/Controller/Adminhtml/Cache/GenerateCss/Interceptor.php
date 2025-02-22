<?php
namespace WeltPixel\Command\Controller\Adminhtml\Cache\GenerateCss;

/**
 * Interceptor class for @see \WeltPixel\Command\Controller\Adminhtml\Cache\GenerateCss
 */
class Interceptor extends \WeltPixel\Command\Controller\Adminhtml\Cache\GenerateCss implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\App\Cache\TypeListInterface $cacheTypeList, \Magento\Framework\App\Cache\StateInterface $cacheState, \Magento\Framework\App\Cache\Frontend\Pool $cacheFrontendPool, \Magento\Framework\View\Result\PageFactory $resultPageFactory, \WeltPixel\Command\Model\GenerateCss $generateCss, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, \Magento\Framework\View\Design\Theme\ThemeProviderInterface $themeProvider, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Framework\View\Asset\MergeService $mergeService, \Magento\Framework\App\Cache\Manager $cacheManager)
    {
        $this->___init();
        parent::__construct($context, $cacheTypeList, $cacheState, $cacheFrontendPool, $resultPageFactory, $generateCss, $scopeConfig, $themeProvider, $storeManager, $mergeService, $cacheManager);
    }

    /**
     * {@inheritdoc}
     */
    public function execute()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute();
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dispatch');
        return $pluginInfo ? $this->___callPlugins('dispatch', func_get_args(), $pluginInfo) : parent::dispatch($request);
    }
}
