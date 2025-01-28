<?php
namespace WeltPixel\SpeedOptimization\Model\ResourceModel\JsBundling;

/**
 * Factory class for @see \WeltPixel\SpeedOptimization\Model\ResourceModel\JsBundling\Collection
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
    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, $instanceName = '\\WeltPixel\\SpeedOptimization\\Model\\ResourceModel\\JsBundling\\Collection')
    {
        $this->_objectManager = $objectManager;
        $this->_instanceName = $instanceName;
    }

    /**
     * Create class instance with specified parameters
     *
     * @param array $data
     * @return \WeltPixel\SpeedOptimization\Model\ResourceModel\JsBundling\Collection
     */
    public function create(array $data = [])
    {
        return $this->_objectManager->create($this->_instanceName, $data);
    }
}
