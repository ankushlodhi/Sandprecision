<?php
namespace Icecube\SpecialOffers\Controller\Adminhtml\Index\Delete;

/**
 * Interceptor class for @see \Icecube\SpecialOffers\Controller\Adminhtml\Index\Delete
 */
class Interceptor extends \Icecube\SpecialOffers\Controller\Adminhtml\Index\Delete implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Icecube\SpecialOffers\Model\Offer $offer)
    {
        $this->___init();
        parent::__construct($context, $offer);
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
