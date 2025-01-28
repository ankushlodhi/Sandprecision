<?php
namespace WeltPixel\SocialLogin\Controller\Account\Unlink;

/**
 * Interceptor class for @see \WeltPixel\SocialLogin\Controller\Account\Unlink
 */
class Interceptor extends \WeltPixel\SocialLogin\Controller\Account\Unlink implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Customer\Model\Session $customerSession, \WeltPixel\SocialLogin\Helper\Data $slHelper, \Magento\Store\Model\StoreManager $storeManager, \Magento\Framework\Controller\Result\RawFactory $resultRawFactory, \Magento\Framework\View\LayoutInterface $layout, \WeltPixel\SocialLogin\Model\SocialloginFactory $socialloginFactory)
    {
        $this->___init();
        parent::__construct($context, $customerSession, $slHelper, $storeManager, $resultRawFactory, $layout, $socialloginFactory);
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
