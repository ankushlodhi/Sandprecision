<?php
namespace Magento\Quote\Api\Data;

/**
 * ExtensionInterface class for @see \Magento\Quote\Api\Data\AddressInterface
 */
interface AddressExtensionInterface extends \Magento\Framework\Api\ExtensionAttributesInterface
{
    /**
     * @return \Magento\SalesRule\Api\Data\RuleDiscountInterface[]|null
     */
    public function getDiscounts();

    /**
     * @param \Magento\SalesRule\Api\Data\RuleDiscountInterface[] $discounts
     * @return $this
     */
    public function setDiscounts($discounts);

    /**
     * @return \Amasty\Conditions\Api\Data\AddressInterface|null
     */
    public function getAdvancedConditions();

    /**
     * @param \Amasty\Conditions\Api\Data\AddressInterface $advancedConditions
     * @return $this
     */
    public function setAdvancedConditions(\Amasty\Conditions\Api\Data\AddressInterface $advancedConditions);

    /**
     * @return string|null
     */
    public function getMpDeliveryDate();

    /**
     * @param string $mpDeliveryDate
     * @return $this
     */
    public function setMpDeliveryDate($mpDeliveryDate);

    /**
     * @return string|null
     */
    public function getMpDeliveryTime();

    /**
     * @param string $mpDeliveryTime
     * @return $this
     */
    public function setMpDeliveryTime($mpDeliveryTime);

    /**
     * @return string|null
     */
    public function getMpHouseSecurityCode();

    /**
     * @param string $mpHouseSecurityCode
     * @return $this
     */
    public function setMpHouseSecurityCode($mpHouseSecurityCode);

    /**
     * @return string|null
     */
    public function getMpDeliveryComment();

    /**
     * @param string $mpDeliveryComment
     * @return $this
     */
    public function setMpDeliveryComment($mpDeliveryComment);
}
