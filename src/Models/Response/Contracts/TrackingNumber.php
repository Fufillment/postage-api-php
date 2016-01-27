<?php
namespace Fulfillment\Postage\Models\Response\Contracts;

interface TrackingNumber
{

    /**
     * @return string
     */
    public function getValue();

    /**
     * @param string $value
     */
    public function setValue($value);

    /**
     * @return string
     */
    public function getBarcodeScanValue();

    /**
     * @param string $barcodeScanValue
     */
    public function setBarcodeScanValue($barcodeScanValue);


    /**
     * @return Carrier
     */
    public function getCarrier();


    /**
     * @param Carrier $carrier
     */
    public function setCarrier($carrier);
}