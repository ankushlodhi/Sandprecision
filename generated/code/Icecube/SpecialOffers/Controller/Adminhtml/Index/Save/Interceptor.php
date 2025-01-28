<?php
namespace Icecube\SpecialOffers\Controller\Adminhtml\Index\Save;

/**
 * Interceptor class for @see \Icecube\SpecialOffers\Controller\Adminhtml\Index\Save
 */
class Interceptor extends \Icecube\SpecialOffers\Controller\Adminhtml\Index\Save implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Icecube\SpecialOffers\Model\Offer $offer, \Magento\Backend\Model\Session $adminsession)
    {
        $this->___init();
        parent::__construct($context, $offer, $adminsession);
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
