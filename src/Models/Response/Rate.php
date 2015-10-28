<?php


namespace Fulfillment\Postage\Models\Response;

use Fulfillment\Postage\Models\Response\Contracts\Rate as RateContract;
use Fulfillment\Postage\Models\Traits\SimpleSerializable;

class Rate implements RateContract, \JsonSerializable
{
    use SimpleSerializable;

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
     * @return Rate
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
     * @return Rate
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
     * @return Rate
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
     * @return Rate
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
     * @return Rate
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
     * @return Rate
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
     * @return Rate
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
     * @return Rate
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