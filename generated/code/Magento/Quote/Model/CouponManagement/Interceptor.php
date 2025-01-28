<?php
namespace Magento\Quote\Model\CouponManagement;

/**
 * Interceptor class for @see \Magento\Quote\Model\CouponManagement
 */
class Interceptor extends \Magento\Quote\Model\CouponManagement implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Quote\Api\CartRepositoryInterface $quoteRepository)
    {
        $this->___init();
        parent::__construct($quoteRepository);
    }

    /**
     * {@inheritdoc}
     */
    public function set($cartId, $couponCode)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'set');
        return $pluginInfo ? $this->___callPlugins('set', func_get_args(), $pluginInfo) : parent::set($cartId, $couponCode);
    }
}
