<?php
namespace Mageplaza\AbandonedCart\Ui\Component\Listing\Column\IsBlacklistActive;

/**
 * Interceptor class for @see \Mageplaza\AbandonedCart\Ui\Component\Listing\Column\IsBlacklistActive
 */
class Interceptor extends \Mageplaza\AbandonedCart\Ui\Component\Listing\Column\IsBlacklistActive implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\UiComponent\ContextInterface $context, \Magento\Framework\View\Element\UiComponentFactory $uiComponentFactory, \Magento\Customer\Model\CustomerFactory $customerFactory, \Mageplaza\AbandonedCart\Helper\Data $helperData, array $components = [], array $data = [])
    {
        $this->___init();
        parent::__construct($context, $uiComponentFactory, $customerFactory, $helperData, $components, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function prepare()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'prepare');
        return $pluginInfo ? $this->___callPlugins('prepare', func_get_args(), $pluginInfo) : parent::prepare();
    }
}
