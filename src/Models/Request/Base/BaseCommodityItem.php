<?php

namespace Fulfillment\Postage\Models\Request\Base;

use \Fulfillment\Postage\Models\Request\Contracts\CommodityItem as CommodityItemContract;

abstract class BaseCommodityItem implements CommodityItemContract
{
    /**
     * @return string
     */
    public function getFromCountry()
    {
        return $this->fromCountry;
    }

    /**
     * @param string $fromCountry
     *
     * @return BaseCommodityItem
     */
    public function setFromCountry($fromCountry)
    {
        $this->fromCountry = $fromCountry;
        return $this;
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
     *
     * @return BaseCommodityItem
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
        return $this;
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
     *
     * @return BaseCommodityItem
     */
    public function setWeightType($weightType)
    {
        $this->weightType = $weightType;
        return $this;
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
     *
     * @return BaseCommodityItem
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
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
     *
     * @return BaseCommodityItem
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
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
     *
     * @return BaseCommodityItem
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
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
     *
     * @return BaseCommodityItem
     */
    public function setUnitValue($unitValue)
    {
        $this->unitValue = $unitValue;
        return $this;
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
     *
     * @return BaseCommodityItem
     */
    public function setUnitWeight($unitWeight)
    {
        $this->unitWeight = $unitWeight;
        return $this;
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
     *
     * @return BaseCommodityItem
     */
    public function setTariffNumber($tariffNumber)
    {
        $this->tariffNumber = $tariffNumber;
        return $this;
    }
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
}