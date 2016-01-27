<?php
namespace Fulfillment\Postage\Models\Response;

use Fulfillment\Postage\Models\Response\Contracts\TrackingNumber as TrackingNumberContract;
use Fulfillment\Postage\Models\Traits\SimpleSerializable;

class TrackingNumber implements TrackingNumberContract, \JsonSerializable
{

    use SimpleSerializable;


    /**
     * @var string
     */
    protected $value;

    /**
     * @var string
     */
    protected $barcodeScanValue;

    /**
     * @var Carrier
     */
    protected $carrier;


    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param string $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function getBarcodeScanValue()
    {
        return $this->barcodeScanValue;
    }

    /**
     * @param string $barcodeScanValue
     */
    public function setBarcodeScanValue($barcodeScanValue)
    {
        $this->barcodeScanValue = $barcodeScanValue;
    }


    /**
     * @return Carrier
     */
    public function getCarrier()
    {
        return $this->carrier;
    }


    /**
     * @param Carrier $carrier
     */
    public function setCarrier($carrier)
    {
        $this->carrier = $carrier;
    }

}