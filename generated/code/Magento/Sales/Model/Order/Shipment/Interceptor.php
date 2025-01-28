<?php
namespace Magento\Sales\Model\Order\Shipment;

/**
 * Interceptor class for @see \Magento\Sales\Model\Order\Shipment
 */
class Interceptor extends \Magento\Sales\Model\Order\Shipment implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Model\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Api\ExtensionAttributesFactory $extensionFactory, \Magento\Framework\Api\AttributeValueFactory $customAttributeFactory, \Magento\Sales\Model\ResourceModel\Order\Shipment\Item\CollectionFactory $shipmentItemCollectionFactory, \Magento\Sales\Model\ResourceModel\Order\Shipment\Track\CollectionFactory $trackCollectionFactory, \Magento\Sales\Model\Order\Shipment\CommentFactory $commentFactory, \Magento\Sales\Model\ResourceModel\Order\Shipment\Comment\CollectionFactory $commentCollectionFactory, \Magento\Sales\Api\OrderRepositoryInterface $orderRepository, ?\Magento\Framework\Model\ResourceModel\AbstractResource $resource = null, ?\Magento\Framework\Data\Collection\AbstractDb $resourceCollection = null, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $registry, $extensionFactory, $customAttributeFactory, $shipmentItemCollectionFactory, $trackCollectionFactory, $commentFactory, $commentCollectionFactory, $orderRepository, $resource, $resourceCollection, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function save()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'save');
        return $pluginInfo ? $this->___callPlugins('save', func_get_args(), $pluginInfo) : parent::save();
    }
}
