<?php
namespace Mageplaza\AbandonedCart\Ui\Component\Listing\Column\Price;

/**
 * Interceptor class for @see \Mageplaza\AbandonedCart\Ui\Component\Listing\Column\Price
 */
class Interceptor extends \Mageplaza\AbandonedCart\Ui\Component\Listing\Column\Price implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\UiComponent\ContextInterface $context, \Magento\Framework\View\Element\UiComponentFactory $uiComponentFactory, \Magento\Directory\Model\CurrencyFactory $currencyFactory, \Magento\Store\Model\Store $store, array $components = [], array $data = [])
    {
        $this->___init();
        parent::__construct($context, $uiComponentFactory, $currencyFactory, $store, $components, $data);
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
