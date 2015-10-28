<?php
namespace Fulfillment\Postage\Models\Response\Contracts;

interface TrackingNumber
{
    /**
     * @param string $value
     */
    public function setValue($value);

    /**
     * @param string $barcodeScanValue
     */
    public function setBarcodeScanValue($barcodeScanValue);

    /**
     * @param string $carrier
     */
    public function setCarrier($carrier);

    /**
     * @return string
     */
    public function getValue();

    /**
     * @return string
     */
    public function getBarcodeScanValue();

    /**
     * @return string
     */
    public function getCarrier();
}