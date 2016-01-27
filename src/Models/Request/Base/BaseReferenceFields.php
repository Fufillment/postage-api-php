<?php

namespace Fulfillment\Postage\Models\Request\Base;

use \Fulfillment\Postage\Models\Request\Contracts\ReferenceFields as ReferenceFieldsContract;

abstract class BaseReferenceFields implements ReferenceFieldsContract {

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

    /**
     * @return string
     */
    public function getShipperReference()
    {
        return $this->shipperReference;
    }

    /**
     * @param string $shipperReference
     */
    public function setShipperReference($shipperReference)
    {
        $this->shipperReference = $shipperReference;
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
     */
    public function setConsigneeReference($consigneeReference)
    {
        $this->consigneeReference = $consigneeReference;
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
     */
    public function setReference1($reference1)
    {
        $this->reference1 = $reference1;
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
     */
    public function setReference2($reference2)
    {
        $this->reference2 = $reference2;
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
     */
    public function setReference3($reference3)
    {
        $this->reference3 = $reference3;
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
     */
    public function setReference4($reference4)
    {
        $this->reference4 = $reference4;
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
     */
    public function setReference5($reference5)
    {
        $this->reference5 = $reference5;
    }

}