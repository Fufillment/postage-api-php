<?php
namespace Fulfillment\Postage\Models\Response\Contracts;


interface Zone
{

    /**
     * @return int
     */
    public function getId();

    /**
     * @param int $id
     */
    public function setId($id);

    /**
     * @return string
     */
    public function getName();

    /**
     * @param string $name
     */
    public function setName($name);

    /**
     * @return Carrier
     */
    public function getCarrier();


    /**
     * @param Carrier $carrier
     */
    public function setCarrier($carrier);

    /**
     * @return ZoneRegion
     */
    public function getZoneRegion();


    /**
     * @param ZoneRegion $zoneRegion
     */
    public function setZoneRegion($zoneRegion);

}