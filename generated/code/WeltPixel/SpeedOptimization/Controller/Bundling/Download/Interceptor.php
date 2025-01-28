<?php
namespace WeltPixel\SpeedOptimization\Controller\Bundling\Download;

/**
 * Interceptor class for @see \WeltPixel\SpeedOptimization\Controller\Bundling\Download
 */
class Interceptor extends \WeltPixel\SpeedOptimization\Controller\Bundling\Download implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Framework\App\Response\Http $http, \WeltPixel\SpeedOptimization\Model\JsBundlingBuilder $jsBundlingBuilderr)
    {
        $this->___init();
        parent::__construct($context, $http, $jsBundlingBuilderr);
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
