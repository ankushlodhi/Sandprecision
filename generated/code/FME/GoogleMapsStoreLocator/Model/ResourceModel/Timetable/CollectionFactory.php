<?php
namespace FME\GoogleMapsStoreLocator\Model\ResourceModel\Timetable;

/**
 * Factory class for @see \FME\GoogleMapsStoreLocator\Model\ResourceModel\Timetable\Collection
 */
class CollectionFactory
{
    /**
     * Object Manager instance
     *
     * @var \Magento\Framework\ObjectManagerInterface
     */
    protected $_objectManager = null;

    /**
     * Instance name to create
     *
     * @var string
     */
    protected $_instanceName = null;

    /**
     * Factory constructor
     *
     * @param \Magento\Framework\ObjectManagerInterface $objectManager
     * @param string $instanceName
     */
    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, $instanceName = '\\FME\\GoogleMapsStoreLocator\\Model\\ResourceModel\\Timetable\\Collection')
    {
        $this->_objectManager = $objectManager;
        $this->_instanceName = $instanceName;
    }

    /**
     * Create class instance with specified parameters
     *
     * @param array $data
     * @return \FME\GoogleMapsStoreLocator\Model\ResourceModel\Timetable\Collection
     */
    public function create(array $data = [])
    {
        return $this->_objectManager->create($this->_instanceName, $data);
    }
}
