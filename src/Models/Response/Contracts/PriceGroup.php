<?php

namespace Fulfillment\Postage\Models\Response\Contracts;


interface PriceGroup
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
     * @return string
     */
    public function getSymbol();

    /**
     * @param string $symbol
     */
    public function setSymbol($symbol);


    /**
     * @return Carrier
     */
    public function getCarrier();


    /**
     * @param Carrier $carrier
     */
    public function setCarrier($carrier);

}