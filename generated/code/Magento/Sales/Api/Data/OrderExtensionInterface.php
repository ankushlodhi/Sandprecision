<?php
namespace Magento\Sales\Api\Data;

/**
 * ExtensionInterface class for @see \Magento\Sales\Api\Data\OrderInterface
 */
interface OrderExtensionInterface extends \Magento\Framework\Api\ExtensionAttributesInterface
{
    /**
     * @return \Magento\Sales\Api\Data\ShippingAssignmentInterface[]|null
     */
    public function getShippingAssignments();

    /**
     * @param \Magento\Sales\Api\Data\ShippingAssignmentInterface[] $shippingAssignments
     * @return $this
     */
    public function setShippingAssignments($shippingAssignments);

    /**
     * @return \Magento\Payment\Api\Data\PaymentAdditionalInfoInterface[]|null
     */
    public function getPaymentAdditionalInfo();

    /**
     * @param \Magento\Payment\Api\Data\PaymentAdditionalInfoInterface[] $paymentAdditionalInfo
     * @return $this
     */
    public function setPaymentAdditionalInfo($paymentAdditionalInfo);

    /**
     * @return \Magento\GiftMessage\Api\Data\MessageInterface|null
     */
    public function getGiftMessage();

    /**
     * @param \Magento\GiftMessage\Api\Data\MessageInterface $giftMessage
     * @return $this
     */
    public function setGiftMessage(\Magento\GiftMessage\Api\Data\MessageInterface $giftMessage);

    /**
     * @return \Magento\Tax\Api\Data\OrderTaxDetailsAppliedTaxInterface[]|null
     */
    public function getAppliedTaxes();

    /**
     * @param \Magento\Tax\Api\Data\OrderTaxDetailsAppliedTaxInterface[] $appliedTaxes
     * @return $this
     */
    public function setAppliedTaxes($appliedTaxes);

    /**
     * @return \Magento\Tax\Api\Data\OrderTaxDetailsItemInterface[]|null
     */
    public function getItemAppliedTaxes();

    /**
     * @param \Magento\Tax\Api\Data\OrderTaxDetailsItemInterface[] $itemAppliedTaxes
     * @return $this
     */
    public function setItemAppliedTaxes($itemAppliedTaxes);

    /**
     * @return boolean|null
     */
    public function getConvertingFromQuote();

    /**
     * @param boolean $convertingFromQuote
     * @return $this
     */
    public function setConvertingFromQuote($convertingFromQuote);

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

    /**
     * @return string|null
     */
    public function getOscOrderComment();

    /**
     * @param string $oscOrderComment
     * @return $this
     */
    public function setOscOrderComment($oscOrderComment);
}
