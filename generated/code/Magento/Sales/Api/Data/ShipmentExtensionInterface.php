<?php
namespace Magento\Sales\Api\Data;

/**
 * ExtensionInterface class for @see \Magento\Sales\Api\Data\ShipmentInterface
 */
interface ShipmentExtensionInterface extends \Magento\Framework\Api\ExtensionAttributesInterface
{
    /**
     * @return string|null
     */
    public function getSourceCode();

    /**
     * @param string $sourceCode
     * @return $this
     */
    public function setSourceCode($sourceCode);

    /**
     * @return string|null
     */
    public function getCarrier();

    /**
     * @param string $carrier
     * @return $this
     */
    public function setCarrier($carrier);

    /**
     * @return string|null
     */
    public function getDeliveryDate();

    /**
     * @param string $deliveryDate
     * @return $this
     */
    public function setDeliveryDate($deliveryDate);

    /**
     * @return float|null
     */
    public function getCost();

    /**
     * @param float $cost
     * @return $this
     */
    public function setCost($cost);
}
