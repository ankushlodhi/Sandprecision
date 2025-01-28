<?php
namespace FME\GoogleMapsStoreLocator\Controller\Adminhtml\Timetable\InlineEdit;

/**
 * Interceptor class for @see \FME\GoogleMapsStoreLocator\Controller\Adminhtml\Timetable\InlineEdit
 */
class Interceptor extends \FME\GoogleMapsStoreLocator\Controller\Adminhtml\Timetable\InlineEdit implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \FME\GoogleMapsStoreLocator\Controller\Adminhtml\Timetable\PostDataProcessor $dataProcessor, \FME\GoogleMapsStoreLocator\Model\Timetable $TimetableModel, \Magento\Framework\Controller\Result\JsonFactory $jsonFactory)
    {
        $this->___init();
        parent::__construct($context, $dataProcessor, $TimetableModel, $jsonFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function execute()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute();
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dispatch');
        return $pluginInfo ? $this->___callPlugins('dispatch', func_get_args(), $pluginInfo) : parent::dispatch($request);
    }
}
