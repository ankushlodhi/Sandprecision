<?php
namespace WeSupply\Toolbox\Controller\Webhook\CreateShipment;

/**
 * Interceptor class for @see \WeSupply\Toolbox\Controller\Webhook\CreateShipment
 */
class Interceptor extends \WeSupply\Toolbox\Controller\Webhook\CreateShipment implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Framework\Controller\Result\JsonFactory $jsonFactory, \Magento\Framework\ObjectManagerInterface $objectManager, \Magento\Sales\Api\Data\OrderItemInterface $orderItemRepository)
    {
        $this->___init();
        parent::__construct($context, $jsonFactory, $objectManager, $orderItemRepository);
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
