<?php
namespace WeltPixel\ProductPage\Controller\Adminhtml\Version\Version;

/**
 * Interceptor class for @see \WeltPixel\ProductPage\Controller\Adminhtml\Version\Version
 */
class Interceptor extends \WeltPixel\ProductPage\Controller\Adminhtml\Version\Version implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\View\Result\PageFactory $resultPageFactory, \Magento\Framework\Json\Helper\Data $jsonHelper, \WeltPixel\ProductPage\Model\ProductPageFactory $productPageFactory)
    {
        $this->___init();
        parent::__construct($context, $resultPageFactory, $jsonHelper, $productPageFactory);
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
