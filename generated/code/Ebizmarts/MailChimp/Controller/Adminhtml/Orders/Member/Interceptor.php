<?php
namespace Ebizmarts\MailChimp\Controller\Adminhtml\Orders\Member;

/**
 * Interceptor class for @see \Ebizmarts\MailChimp\Controller\Adminhtml\Orders\Member
 */
class Interceptor extends \Ebizmarts\MailChimp\Controller\Adminhtml\Orders\Member implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Ebizmarts\MailChimp\Helper\Data $helper, \Magento\Sales\Model\OrderRepository $orderRepository, \Magento\Framework\UrlInterface $urlBuilder)
    {
        $this->___init();
        parent::__construct($context, $helper, $orderRepository, $urlBuilder);
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
