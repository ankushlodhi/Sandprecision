<?php
namespace Icecube\UrlRewrite\Controller\Ajax\Suggest;

/**
 * Interceptor class for @see \Icecube\UrlRewrite\Controller\Ajax\Suggest
 */
class Interceptor extends \Icecube\UrlRewrite\Controller\Ajax\Suggest implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Search\Model\AutocompleteInterface $autocomplete)
    {
        $this->___init();
        parent::__construct($context, $autocomplete);
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
