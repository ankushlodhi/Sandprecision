<?php
namespace WeltPixel\ProductPage\Controller\Visitor\Push;

/**
 * Interceptor class for @see \WeltPixel\ProductPage\Controller\Visitor\Push
 */
class Interceptor extends \WeltPixel\ProductPage\Controller\Visitor\Push implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \WeltPixel\ProductPage\Helper\Data $wpHelper, \WeltPixel\ProductPage\Model\VisitorCounterManager $visitorCounterManager)
    {
        $this->___init();
        parent::__construct($context, $wpHelper, $visitorCounterManager);
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
