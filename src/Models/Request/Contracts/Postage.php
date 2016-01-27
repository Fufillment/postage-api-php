<?php

namespace Fulfillment\Postage\Models\Request\Contracts;

interface Postage extends \JsonSerializable
{
    /**
     * @return string
     */
    public function getShipper();

    /**
     * @param string $shipper
     *
     */
    public function setShipper($shipper);

    /**
     * @return string
     */
    public function getService();

    /**
     * @param string $service
     *
     */
    public function setService($service);

    /**
     * @return ReferenceFields
     */
    public function getReferenceFields();

    /**
     * @param $referenceFields
     */
    public function setReferenceFields($referenceFields);

    /**
     * @return Shipment
     */
    public function getShipment();

    /**
     * @param mixed $shipment
     *
     */
    public function setShipment($shipment);
}