<?php
namespace Magento\Sales\Api\Data;

/**
 * Extension class for @see \Magento\Sales\Api\Data\ShipmentInterface
 */
class ShipmentExtension extends \Magento\Framework\Api\AbstractSimpleObject implements ShipmentExtensionInterface
{
    /**
     * @return string|null
     */
    public function getSourceCode()
    {
        return $this->_get('source_code');
    }

    /**
     * @param string $sourceCode
     * @return $this
     */
    public function setSourceCode($sourceCode)
    {
        $this->setData('source_code', $sourceCode);
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCarrier()
    {
        return $this->_get('carrier');
    }

    /**
     * @param string $carrier
     * @return $this
     */
    public function setCarrier($carrier)
    {
        $this->setData('carrier', $carrier);
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDeliveryDate()
    {
        return $this->_get('delivery_date');
    }

    /**
     * @param string $deliveryDate
     * @return $this
     */
    public function setDeliveryDate($deliveryDate)
    {
        $this->setData('delivery_date', $deliveryDate);
        return $this;
    }

    /**
     * @return float|null
     */
    public function getCost()
    {
        return $this->_get('cost');
    }

    /**
     * @param float $cost
     * @return $this
     */
    public function setCost($cost)
    {
        $this->setData('cost', $cost);
        return $this;
    }
}
