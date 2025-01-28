<?php
namespace Amasty\Shiprules\Controller\Adminhtml\Rule\Save;

/**
 * Interceptor class for @see \Amasty\Shiprules\Controller\Adminhtml\Rule\Save
 */
class Interceptor extends \Amasty\Shiprules\Controller\Adminhtml\Rule\Save implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Amasty\CommonRules\Model\Rule $ruleModel, \Magento\Framework\Model\ResourceModel\Db\AbstractDb $resource, \Magento\Framework\App\Request\DataPersistorInterface $dataPersistor)
    {
        $this->___init();
        parent::__construct($context, $ruleModel, $resource, $dataPersistor);
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
