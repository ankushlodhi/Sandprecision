<?php
namespace WeltPixel\SmartProductTabs\Ui\Component\Listing\Column\CustomerGroup;

/**
 * Interceptor class for @see \WeltPixel\SmartProductTabs\Ui\Component\Listing\Column\CustomerGroup
 */
class Interceptor extends \WeltPixel\SmartProductTabs\Ui\Component\Listing\Column\CustomerGroup implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Customer\Model\ResourceModel\Group\CollectionFactory $groupCollectionFactory, \Magento\Framework\View\Element\UiComponent\ContextInterface $context, \Magento\Framework\View\Element\UiComponentFactory $uiComponentFactory, array $components = [], array $data = [])
    {
        $this->___init();
        parent::__construct($groupCollectionFactory, $context, $uiComponentFactory, $components, $data);
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
