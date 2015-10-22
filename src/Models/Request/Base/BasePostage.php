<?php

namespace Fulfillment\Postage\Models\Request\Base;

use \Fulfillment\Postage\Models\Request\Contracts\Postage as PostageContract;

abstract class BasePostage implements PostageContract
{
    /**
     * @return string
     */
    public function getShipper()
    {
        return $this->shipper;
    }

    /**
     * @param string $shipper
     *
     * @return BasePostage
     */
    public function setShipper($shipper)
    {
        $this->shipper = $shipper;
        return $this;
    }

    /**
     * @return string
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * @param string $service
     *
     * @return BasePostage
     */
    public function setService($service)
    {
        $this->service = $service;
        return $this;
    }

    /**
     * @return string
     */
    public function getShipperReference()
    {
        return $this->shipperReference;
    }

    /**
     * @param string $shipperReference
     *
     * @return BasePostage
     */
    public function setShipperReference($shipperReference)
    {
        $this->shipperReference = $shipperReference;
        return $this;
    }

    /**
     * @return string
     */
    public function getConsigneeReference()
    {
        return $this->consigneeReference;
    }

    /**
     * @param string $consigneeReference
     *
     * @return BasePostage
     */
    public function setConsigneeReference($consigneeReference)
    {
        $this->consigneeReference = $consigneeReference;
        return $this;
    }

    /**
     * @return string
     */
    public function getReference1()
    {
        return $this->reference1;
    }

    /**
     * @param string $reference1
     *
     * @return BasePostage
     */
    public function setReference1($reference1)
    {
        $this->reference1 = $reference1;
        return $this;
    }

    /**
     * @return string
     */
    public function getReference2()
    {
        return $this->reference2;
    }

    /**
     * @param string $reference2
     *
     * @return BasePostage
     */
    public function setReference2($reference2)
    {
        $this->reference2 = $reference2;
        return $this;
    }

    /**
     * @return string
     */
    public function getReference3()
    {
        return $this->reference3;
    }

    /**
     * @param string $reference3
     *
     * @return BasePostage
     */
    public function setReference3($reference3)
    {
        $this->reference3 = $reference3;
        return $this;
    }

    /**
     * @return string
     */
    public function getReference4()
    {
        return $this->reference4;
    }

    /**
     * @param string $reference4
     *
     * @return BasePostage
     */
    public function setReference4($reference4)
    {
        $this->reference4 = $reference4;
        return $this;
    }

    /**
     * @return string
     */
    public function getReference5()
    {
        return $this->reference5;
    }

    /**
     * @param string $reference5
     *
     * @return BasePostage
     */
    public function setReference5($reference5)
    {
        $this->reference5 = $reference5;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getShipment()
    {
        return $this->shipment;
    }

    /**
     * @param mixed $shipment
     *
     * @return BasePostage
     */
    public function setShipment($shipment)
    {
        $this->shipment = $shipment;
        return $this;
    }

    /**
     * @var string
     */
    protected $shipper;

    /**
     * @var string
     */
    protected $service;

    /**
     * @var string
     */
    protected $shipperReference;

    /**
     * @var string
     */
    protected $consigneeReference;

    /**
     * @var string
     */
    protected $reference1;

    /**
     * @var string
     */
    protected $reference2;

    /**
     * @var string
     */
    protected $reference3;

    /**
     * @var string
     */
    protected $reference4;

    /**
     * @var string
     */
    protected $reference5;

    protected $shipment;
}