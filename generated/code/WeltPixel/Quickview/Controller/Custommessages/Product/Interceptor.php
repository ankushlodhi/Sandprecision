<?php
namespace WeltPixel\Quickview\Controller\Custommessages\Product;

/**
 * Interceptor class for @see \WeltPixel\Quickview\Controller\Custommessages\Product
 */
class Interceptor extends \WeltPixel\Quickview\Controller\Custommessages\Product implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \WeltPixel\Quickview\Model\CustommessageBuilder $custommesageBuilder)
    {
        $this->___init();
        parent::__construct($context, $custommesageBuilder);
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
