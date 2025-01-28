<?php
namespace Elsnertech\Paytrace\Controller\SaveCard\DeleteCard;

/**
 * Interceptor class for @see \Elsnertech\Paytrace\Controller\SaveCard\DeleteCard
 */
class Interceptor extends \Elsnertech\Paytrace\Controller\SaveCard\DeleteCard implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Framework\View\Result\PageFactory $pageFactory, \Magento\Framework\App\Request\Http $request, \Elsnertech\Paytrace\Model\Customers $paytraceCollection, \Magento\Framework\Message\ManagerInterface $messageManager, \Elsnertech\Paytrace\Model\Api\Api $paytraceApi)
    {
        $this->___init();
        parent::__construct($context, $pageFactory, $request, $paytraceCollection, $messageManager, $paytraceApi);
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
