<?php
namespace Elsnertech\Paytrace\Controller\SaveCard\SaveCardAjax;

/**
 * Interceptor class for @see \Elsnertech\Paytrace\Controller\SaveCard\SaveCardAjax
 */
class Interceptor extends \Elsnertech\Paytrace\Controller\SaveCard\SaveCardAjax implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Elsnertech\Paytrace\Model\Paytracevault $paytraceVault, \Magento\Framework\App\Http\Context $httpContext, \Magento\Framework\View\Asset\Repository $assetRepo, \Magento\Framework\App\RequestInterface $request, \Magento\Framework\View\Result\PageFactory $pageFactory)
    {
        $this->___init();
        parent::__construct($context, $paytraceVault, $httpContext, $assetRepo, $request, $pageFactory);
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
