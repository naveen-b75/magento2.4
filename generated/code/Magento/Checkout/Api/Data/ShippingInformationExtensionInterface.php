<?php
namespace Magento\Checkout\Api\Data;

/**
 * ExtensionInterface class for @see \Magento\Checkout\Api\Data\ShippingInformationInterface
 */
interface ShippingInformationExtensionInterface extends \Magento\Framework\Api\ExtensionAttributesInterface
{
    /**
     * @return string|null
     */
    public function getDeliveryDate();

    /**
     * @param string $deliveryDate
     * @return $this
     */
    public function setDeliveryDate($deliveryDate);
}
