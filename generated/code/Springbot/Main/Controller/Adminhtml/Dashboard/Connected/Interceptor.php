<?php
namespace Springbot\Main\Controller\Adminhtml\Dashboard\Connected;

/**
 * Interceptor class for @see \Springbot\Main\Controller\Adminhtml\Dashboard\Connected
 */
class Interceptor extends \Springbot\Main\Controller\Adminhtml\Dashboard\Connected implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\View\Result\PageFactory $resultPageFactory, \Magento\Framework\View\Asset\Repository $assetRepository, \Springbot\Main\Model\Api $api)
    {
        $this->___init();
        parent::__construct($context, $resultPageFactory, $assetRepository, $api);
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
