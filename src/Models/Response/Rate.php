<?php

namespace Fulfillment\Postage\Models\Response;

use Fulfillment\Postage\Models\Response\Contracts\Rate as RateContract;
use Fulfillment\Postage\Models\Traits\SimpleSerializable;

class Rate implements RateContract, \JsonSerializable
{
    use SimpleSerializable;


    /**
     * @var Currency
     */
    protected $currency;

    /**
     * @var PriceGroup
     */
    protected $priceGroup;

    /**
     * @var float
     */
    protected $base;

    /**
     * @var float
     */
    protected $total;

    /**
     * @var TaxType
     */
    protected $taxType;

    /**
     * @var float
     */
    protected $tax;

    /**
     * @var FuelSurchargeType
     */
    protected $fuelSurchargeType;

    /**
     * @var float
     */
    protected $fuelSurcharge;

    /**
     * @var Zone
     */
    protected $zone;


    /**
     * @return Currency
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param Currency $currency
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }

    /**
     * @return PriceGroup
     */
    public function getPriceGroup()
    {
        return $this->priceGroup;
    }

    /**
     * @param PriceGroup $priceGroup
     */
    public function setPriceGroup($priceGroup)
    {
        $this->priceGroup = $priceGroup;
    }

    /**
     * @return float
     */
    public function getBase()
    {
        return $this->base;
    }

    /**
     * @param float $base
     */
    public function setBase($base)
    {
        $this->base = $base;
    }

    /**
     * @return float
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @param float $total
     */
    public function setTotal($total)
    {
        $this->total = $total;
    }

    /**
     * @return TaxType
     */
    public function getTaxType()
    {
        return $this->taxType;
    }

    /**
     * @param TaxType $taxType
     */
    public function setTaxType($taxType)
    {
        $this->taxType = $taxType;
    }

    /**
     * @return float
     */
    public function getTax()
    {
        return $this->tax;
    }

    /**
     * @param float $tax
     */
    public function setTax($tax)
    {
        $this->tax = $tax;
    }

    /**
     * @return FuelSurchargeType
     */
    public function getFuelSurchargeType()
    {
        return $this->fuelSurchargeType;
    }

    /**
     * @param FuelSurchargeType $fuelSurchargeType
     */
    public function setFuelSurchargeType($fuelSurchargeType)
    {
        $this->fuelSurchargeType = $fuelSurchargeType;
    }

    /**
     * @return float
     */
    public function getFuelSurcharge()
    {
        return $this->fuelSurcharge;
    }

    /**
     * @param float $fuelSurcharge
     */
    public function setFuelSurcharge($fuelSurcharge)
    {
        $this->fuelSurcharge = $fuelSurcharge;
    }

    /**
     * @return Zone
     */
    public function getZone()
    {
        return $this->zone;
    }

    /**
     * @param Zone $zone
     */
    public function setZone($zone)
    {
        $this->zone = $zone;
    }
}