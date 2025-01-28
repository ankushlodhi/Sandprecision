<?php
namespace Swissup\Marketplace\Ui\Component\Listing\Columns\Links;

/**
 * Interceptor class for @see \Swissup\Marketplace\Ui\Component\Listing\Columns\Links
 */
class Interceptor extends \Swissup\Marketplace\Ui\Component\Listing\Columns\Links implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\UiComponent\ContextInterface $context, \Magento\Framework\View\Element\UiComponentFactory $uiComponentFactory, \Magento\Framework\AuthorizationInterface $authorization, array $components = [], array $data = [])
    {
        $this->___init();
        parent::__construct($context, $uiComponentFactory, $authorization, $components, $data);
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
