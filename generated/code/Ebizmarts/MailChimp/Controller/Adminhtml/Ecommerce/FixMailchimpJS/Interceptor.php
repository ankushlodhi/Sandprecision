<?php
namespace Ebizmarts\MailChimp\Controller\Adminhtml\Ecommerce\FixMailchimpJS;

/**
 * Interceptor class for @see \Ebizmarts\MailChimp\Controller\Adminhtml\Ecommerce\FixMailchimpJS
 */
class Interceptor extends \Ebizmarts\MailChimp\Controller\Adminhtml\Ecommerce\FixMailchimpJS implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory, \Magento\Config\Model\ResourceModel\Config $config, \Magento\Framework\App\Cache\TypeListInterface $typeList, \Ebizmarts\MailChimp\Helper\Data $helper)
    {
        $this->___init();
        parent::__construct($context, $resultJsonFactory, $config, $typeList, $helper);
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
