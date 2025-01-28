<?php
namespace Springbot\Main\Model\Api\Entity\Data\Customer;

/**
 * Factory class for @see \Springbot\Main\Model\Api\Entity\Data\Customer\Address
 */
class AddressFactory
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
    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, $instanceName = '\\Springbot\\Main\\Model\\Api\\Entity\\Data\\Customer\\Address')
    {
        $this->_objectManager = $objectManager;
        $this->_instanceName = $instanceName;
    }

    /**
     * Create class instance with specified parameters
     *
     * @param array $data
     * @return \Springbot\Main\Model\Api\Entity\Data\Customer\Address
     */
    public function create(array $data = [])
    {
        return $this->_objectManager->create($this->_instanceName, $data);
    }
}
