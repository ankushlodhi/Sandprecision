<?php
namespace WeltPixel\ProductLabels\Ui\Component\Listing\Column\Image;

/**
 * Interceptor class for @see \WeltPixel\ProductLabels\Ui\Component\Listing\Column\Image
 */
class Interceptor extends \WeltPixel\ProductLabels\Ui\Component\Listing\Column\Image implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\UiComponent\ContextInterface $context, \Magento\Framework\View\Element\UiComponentFactory $uiComponentFactory, \WeltPixel\ProductLabels\Model\Config\FileUploader\FileProcessor $imageProcesor, \Magento\Framework\View\Asset\Repository $assetRepo, array $components = [], array $data = [])
    {
        $this->___init();
        parent::__construct($context, $uiComponentFactory, $imageProcesor, $assetRepo, $components, $data);
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
