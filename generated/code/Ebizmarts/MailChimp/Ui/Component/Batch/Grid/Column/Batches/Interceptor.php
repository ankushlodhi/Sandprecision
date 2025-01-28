<?php
namespace Ebizmarts\MailChimp\Ui\Component\Batch\Grid\Column\Batches;

/**
 * Interceptor class for @see \Ebizmarts\MailChimp\Ui\Component\Batch\Grid\Column\Batches
 */
class Interceptor extends \Ebizmarts\MailChimp\Ui\Component\Batch\Grid\Column\Batches implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Ebizmarts\MailChimp\Helper\Data $helper, \Ebizmarts\MailChimp\Model\MailChimpSyncBatches $mailChimpSyncB, \Magento\Framework\View\Element\UiComponent\ContextInterface $context, \Magento\Framework\View\Element\UiComponentFactory $uiComponentFactory, \Magento\Framework\UrlInterface $urlBuilder, array $components = [], array $data = [])
    {
        $this->___init();
        parent::__construct($helper, $mailChimpSyncB, $context, $uiComponentFactory, $urlBuilder, $components, $data);
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
