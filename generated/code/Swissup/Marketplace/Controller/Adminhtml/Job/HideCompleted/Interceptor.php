<?php
namespace Swissup\Marketplace\Controller\Adminhtml\Job\HideCompleted;

/**
 * Interceptor class for @see \Swissup\Marketplace\Controller\Adminhtml\Job\HideCompleted
 */
class Interceptor extends \Swissup\Marketplace\Controller\Adminhtml\Job\HideCompleted implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Swissup\Marketplace\Model\ResourceModel\Job\CollectionFactory $jobCollectionFactory)
    {
        $this->___init();
        parent::__construct($context, $jobCollectionFactory);
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
