<?php
namespace WeSupply\Toolbox\Controller\Orders\Login;

/**
 * Interceptor class for @see \WeSupply\Toolbox\Controller\Orders\Login
 */
class Interceptor extends \WeSupply\Toolbox\Controller\Orders\Login implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \WeSupply\Toolbox\Helper\Data $helper, \Magento\Framework\Serialize\Serializer\Json $json, \WeSupply\Toolbox\Model\OrderRepository $wsOrderRepository, \Magento\Framework\Session\SessionManagerInterface $session)
    {
        $this->___init();
        parent::__construct($context, $helper, $json, $wsOrderRepository, $session);
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
