<?php
namespace Swissup\Core\Ui\Component\Listing\Columns\ModuleActions;

/**
 * Interceptor class for @see \Swissup\Core\Ui\Component\Listing\Columns\ModuleActions
 */
class Interceptor extends \Swissup\Core\Ui\Component\Listing\Columns\ModuleActions implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\UiComponent\ContextInterface $context, \Magento\Framework\View\Element\UiComponentFactory $uiComponentFactory, \Magento\Framework\UrlInterface $urlBuilder, \Swissup\Core\Model\ModuleFactory $moduleFactory, array $components = [], array $data = [])
    {
        $this->___init();
        parent::__construct($context, $uiComponentFactory, $urlBuilder, $moduleFactory, $components, $data);
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
