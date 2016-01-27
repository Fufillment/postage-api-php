<?php

namespace Fulfillment\Postage\Models\Response;

use Fulfillment\Postage\Models\Response\Contracts\Zone as ZoneContract;
use Fulfillment\Postage\Models\Traits\SimpleSerializable;

class Zone implements ZoneContract, \JsonSerializable
{

    use SimpleSerializable;

    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var Carrier
     */
    protected $carrier;

    /**
     * @var ZoneRegion
     */
    protected $zoneRegion;


    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
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

    /**
     * @return ZoneRegion
     */
    public function getZoneRegion()
    {
        return $this->zoneRegion;
    }


    /**
     * @param ZoneRegion $zoneRegion
     */
    public function setZoneRegion($zoneRegion)
    {
        $this->zoneRegion = $zoneRegion;
    }

}