<?php
namespace Mageplaza\AbandonedCart\Controller\Checkout\Cart;

/**
 * Interceptor class for @see \Mageplaza\AbandonedCart\Controller\Checkout\Cart
 */
class Interceptor extends \Mageplaza\AbandonedCart\Controller\Checkout\Cart implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Mageplaza\AbandonedCart\Model\Api\AbandonedCartRepository $abandonedCartRepository, \Magento\Framework\App\Action\Context $context)
    {
        $this->___init();
        parent::__construct($abandonedCartRepository, $context);
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
