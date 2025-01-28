<?php
namespace WeltPixel\Sitemap\Ui\Component\Listing\Column\IndexFollow;

/**
 * Interceptor class for @see \WeltPixel\Sitemap\Ui\Component\Listing\Column\IndexFollow
 */
class Interceptor extends \WeltPixel\Sitemap\Ui\Component\Listing\Column\IndexFollow implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\UiComponent\ContextInterface $context, \Magento\Framework\View\Element\UiComponentFactory $uiComponentFactory, \WeltPixel\Sitemap\Model\IndexFollowBuilder $indexFollowBuilder, array $components = [], array $data = [])
    {
        $this->___init();
        parent::__construct($context, $uiComponentFactory, $indexFollowBuilder, $components, $data);
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
