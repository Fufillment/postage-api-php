<?php
namespace Fulfillment\Postage\Models\Response\Contracts;

interface Rate
{
    /**
     * @return string
     */
    public function getCurrency();

    /**
     * @param string $currency
     *
     * @return Rate
     */
    public function setCurrency($currency);

    /**
     * @return string
     */
    public function getPriceGroup();

    /**
     * @param string $priceGroup
     *
     * @return Rate
     */
    public function setPriceGroup($priceGroup);

    /**
     * @return float
     */
    public function getBase();

    /**
     * @param float $base
     *
     * @return Rate
     */
    public function setBase($base);

    /**
     * @return float
     */
    public function getTotal();

    /**
     * @param float $total
     *
     * @return Rate
     */
    public function setTotal($total);

    /**
     * @return string
     */
    public function getTaxType();

    /**
     * @param string $taxType
     *
     * @return Rate
     */
    public function setTaxType($taxType);

    /**
     * @return float
     */
    public function getTax();

    /**
     * @param float $tax
     *
     * @return Rate
     */
    public function setTax($tax);

    /**
     * @return string
     */
    public function getFuelSurchargeType();

    /**
     * @param string $fuelSurchargeType
     *
     * @return Rate
     */
    public function setFuelSurchargeType($fuelSurchargeType);

    /**
     * @return float
     */
    public function getFuelSurcharge();

    /**
     * @param float $fuelSurcharge
     *
     * @return Rate
     */
    public function setFuelSurcharge($fuelSurcharge);

    /**
     * @return int
     */
    public function getZone();

    /**
     * @param int $zone
     */
    public function setZone($zone);
}