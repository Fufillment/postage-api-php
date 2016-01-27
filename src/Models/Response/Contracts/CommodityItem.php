<?php

namespace Fulfillment\Postage\Models\Response\Contracts;

interface CommodityItem {

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
    public function getCode();

    /**
     * @param string $code
     */
    public function setCode($code);

    /**
     * @return string
     */
    public function getDescription();

    /**
     * @param string $description
     */
    public function setDescription($description);

    /**
     * @return int
     */
    public function getQuantity();

    /**
     * @param int $quantity
     */
    public function setQuantity($quantity);

    /**
     * @return float
     */
    public function getUnitValue();

    /**
     * @param float $unitValue
     */
    public function setUnitValue($unitValue);

    /**
     * @return float
     */
    public function getUnitWeight();

    /**
     * @param float $unitWeight
     */
    public function setUnitWeight($unitWeight);

    /**
     * @return string
     */
    public function getTariffNumber();

    /**
     * @param string $tariffNumber
     */
    public function setTariffNumber($tariffNumber);

    /**
     * @return Country
     */
    public function getFromCountry();

    /**
     * @param Country $fromCountry
     */
    public function setFromCountry($fromCountry);

    /**
     * @return Currency
     */
    public function getCurrency();

    /**
     * @param Currency $currency
     */
    public function setCurrency($currency);

    /**
     * @return WeightType
     */
    public function getWeightType();

    /**
     * @param WeightType $weightType
     */
    public function setWeightType($weightType);
}