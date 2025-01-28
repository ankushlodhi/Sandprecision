<?php
namespace WeltPixel\SocialLogin\Ui\Component\Listing\Column\Type;

/**
 * Interceptor class for @see \WeltPixel\SocialLogin\Ui\Component\Listing\Column\Type
 */
class Interceptor extends \WeltPixel\SocialLogin\Ui\Component\Listing\Column\Type implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\UiComponent\ContextInterface $context, \Magento\Framework\View\Element\UiComponentFactory $uiComponentFactory, \Magento\Store\Model\StoreManagerInterface $storeManager, array $components = [], array $data = [])
    {
        $this->___init();
        parent::__construct($context, $uiComponentFactory, $storeManager, $components, $data);
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
