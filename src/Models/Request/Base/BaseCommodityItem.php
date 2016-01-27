<?php

namespace Fulfillment\Postage\Models\Request\Base;

use \Fulfillment\Postage\Models\Request\Contracts\CommodityItem as CommodityItemContract;

abstract class BaseCommodityItem implements CommodityItemContract
{

    /**
     * @var string
     */
    protected $fromCountry;

    /**
     * @var string
     */
    protected $currency;

    /**
     * @var string
     */
    protected $weightType;

    /**
     * @var string
     */
    protected $code;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var integer
     */
    protected $quantity;

    /**
     * @var float
     */
    protected $unitValue;

    /**
     * @var float
     */
    protected $unitWeight;

    /**
     * @var integer
     */
    protected $tariffNumber;


    /**
     * @return string
     */
    public function getFromCountry()
    {
        return $this->fromCountry;
    }

    /**
     * @param string $fromCountry
     */
    public function setFromCountry($fromCountry)
    {
        $this->fromCountry = $fromCountry;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }

    /**
     * @return string
     */
    public function getWeightType()
    {
        return $this->weightType;
    }

    /**
     * @param string $weightType
     */
    public function setWeightType($weightType)
    {
        $this->weightType = $weightType;
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param string $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    /**
     * @return float
     */
    public function getUnitValue()
    {
        return $this->unitValue;
    }

    /**
     * @param float $unitValue
     */
    public function setUnitValue($unitValue)
    {
        $this->unitValue = $unitValue;
    }

    /**
     * @return float
     */
    public function getUnitWeight()
    {
        return $this->unitWeight;
    }

    /**
     * @param float $unitWeight
     */
    public function setUnitWeight($unitWeight)
    {
        $this->unitWeight = $unitWeight;
    }

    /**
     * @return int
     */
    public function getTariffNumber()
    {
        return $this->tariffNumber;
    }

    /**
     * @param int $tariffNumber
     */
    public function setTariffNumber($tariffNumber)
    {
        $this->tariffNumber = $tariffNumber;
    }

}