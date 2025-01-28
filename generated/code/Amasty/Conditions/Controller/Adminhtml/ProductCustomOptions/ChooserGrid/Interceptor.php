<?php
namespace Amasty\Conditions\Controller\Adminhtml\ProductCustomOptions\ChooserGrid;

/**
 * Interceptor class for @see \Amasty\Conditions\Controller\Adminhtml\ProductCustomOptions\ChooserGrid
 */
class Interceptor extends \Amasty\Conditions\Controller\Adminhtml\ProductCustomOptions\ChooserGrid implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\View\Layout\Builder $builder)
    {
        $this->___init();
        parent::__construct($context, $builder);
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
