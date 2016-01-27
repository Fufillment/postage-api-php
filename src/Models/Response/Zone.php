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

    }

    /**
     * @param int $id
     */
    public function setId($id)
    {

    }

    /**
     * @return string
     */
    public function getName()
    {

    }

    /**
     * @param string $name
     */
    public function setName($name)
    {

    }

    /**
     * @return Carrier
     */
    public function getCarrier()
    {

    }


    /**
     * @param Carrier $carrier
     */
    public function setCarrier($carrier)
    {

    }

    /**
     * @return ZoneRegion
     */
    public function getZoneRegion()
    {

    }


    /**
     * @param ZoneRegion $zoneRegion
     */
    public function setZoneRegion($zoneRegion)
    {

    }

}