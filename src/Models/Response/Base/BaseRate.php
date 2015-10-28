<?php


namespace Fulfillment\Postage\Models\Response\Base;

use Fulfillment\Postage\Models\Response\Contracts\Rate;

abstract class BaseRate implements Rate
{
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
     * @return BaseRate
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * @return string
     */
    public function getPriceGroup()
    {
        return $this->priceGroup;
    }

    /**
     * @param string $priceGroup
     *
     * @return BaseRate
     */
    public function setPriceGroup($priceGroup)
    {
        $this->priceGroup = $priceGroup;
        return $this;
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
     *
     * @return BaseRate
     */
    public function setBase($base)
    {
        $this->base = $base;
        return $this;
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
     *
     * @return BaseRate
     */
    public function setTotal($total)
    {
        $this->total = $total;
        return $this;
    }

    /**
     * @return string
     */
    public function getTaxType()
    {
        return $this->taxType;
    }

    /**
     * @param string $taxType
     *
     * @return BaseRate
     */
    public function setTaxType($taxType)
    {
        $this->taxType = $taxType;
        return $this;
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
     *
     * @return BaseRate
     */
    public function setTax($tax)
    {
        $this->tax = $tax;
        return $this;
    }

    /**
     * @return string
     */
    public function getFuelSurchargeType()
    {
        return $this->fuelSurchargeType;
    }

    /**
     * @param string $fuelSurchargeType
     *
     * @return BaseRate
     */
    public function setFuelSurchargeType($fuelSurchargeType)
    {
        $this->fuelSurchargeType = $fuelSurchargeType;
        return $this;
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
     *
     * @return BaseRate
     */
    public function setFuelSurcharge($fuelSurcharge)
    {
        $this->fuelSurcharge = $fuelSurcharge;
        return $this;
    }
    /**
     * @var string
     */
    protected $currency;

    /**
     * @var string
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
     * @var string
     */
    protected $taxType;

    /**
     * @var float
     */
    protected $tax;

    /**
     * @var string
     */
    protected $fuelSurchargeType;

    /**
     * @var float
     */
    protected $fuelSurcharge;

}