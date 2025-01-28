<?php
namespace WeltPixel\InstagramWidget\Controller\Push\Content;

/**
 * Interceptor class for @see \WeltPixel\InstagramWidget\Controller\Push\Content
 */
class Interceptor extends \WeltPixel\InstagramWidget\Controller\Push\Content implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \WeltPixel\InstagramWidget\Model\InstagramWidgetCache $instagramWidgetCache)
    {
        $this->___init();
        parent::__construct($context, $instagramWidgetCache);
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
