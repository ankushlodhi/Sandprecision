<?php
namespace WeltPixel\ProductLabels\Ui\Component\Listing\Column\ProductLabelsActions;

/**
 * Interceptor class for @see \WeltPixel\ProductLabels\Ui\Component\Listing\Column\ProductLabelsActions
 */
class Interceptor extends \WeltPixel\ProductLabels\Ui\Component\Listing\Column\ProductLabelsActions implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\UiComponent\ContextInterface $context, \Magento\Framework\View\Element\UiComponentFactory $uiComponentFactory, \Magento\Framework\UrlInterface $urlBuilder, array $components = [], array $data = [])
    {
        $this->___init();
        parent::__construct($context, $uiComponentFactory, $urlBuilder, $components, $data);
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
