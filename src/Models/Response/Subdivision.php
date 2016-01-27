<?php

namespace Fulfillment\Postage\Models\Response;

use Fulfillment\Postage\Models\Response\Contracts\Subdivision as SubdivisionContract;
use Fulfillment\Postage\Models\Traits\SimpleSerializable;

class Subdivision implements SubdivisionContract, \JsonSerializable
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
     * @var string
     */
    protected $symbol;

    /**
     * @var string
     */
    protected $localSymbol;

    /**
     * @var SubdivisionType
     */
    protected $subdivisionType;

    /**
     * @var Country
     */
    protected $country;


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
     * @return string
     */
    public function getSymbol()
    {
        return $this->symbol;
    }

    /**
     * @param string $symbol
     */
    public function setSymbol($symbol)
    {
        $this->symbol = $symbol;
    }

    /**
     * @return string
     */
    public function getLocalSymbol()
    {
        return $this->localSymbol;
    }

    /**
     * @param string $localSymbol
     */
    public function setLocalSymbol($localSymbol)
    {
        $this->localSymbol = $localSymbol;
    }

    /**
     * @return SubdivisionType
     */
    public function getSubdivisionType()
    {
        return $this->subdivisionType;
    }

    /**
     * @param SubdivisionType $subdivisionType
     */
    public function setSubdivisionType($subdivisionType)
    {
        $this->subdivisionType = $subdivisionType;
    }

    /**
     * @return Country
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param Country $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

}