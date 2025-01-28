<?php
namespace WeltPixel\SpeedOptimization\Controller\Bundling\Push;

/**
 * Interceptor class for @see \WeltPixel\SpeedOptimization\Controller\Bundling\Push
 */
class Interceptor extends \WeltPixel\SpeedOptimization\Controller\Bundling\Push implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \WeltPixel\SpeedOptimization\Model\JsBundlingBuilder $jsBundlingBuilder)
    {
        $this->___init();
        parent::__construct($context, $jsBundlingBuilder);
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
