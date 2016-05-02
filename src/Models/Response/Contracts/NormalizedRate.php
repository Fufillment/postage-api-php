<?php


namespace Fulfillment\Postage\Models\Response\Contracts;


use Fulfillment\Postage\Models\Response\Country;
use Fulfillment\Postage\Models\Response\Currency;
use Fulfillment\Postage\Models\Response\Service;
use Fulfillment\Postage\Models\Response\WeightType;
use Fulfillment\Postage\Models\Response\Zone;

interface NormalizedRate
{
    /**
     * @return float
     */
    public function getWeight();

    /**
     * @return float
     */
    public function getMinWeight();

    /**
     * @return float
     */
    public function getMaxWeight();

    /**
     * @return float
     */
    public function getBasePrice();

    /**
     * @return PriceGroup
     * 
     */
    public function getPriceGroup();

    /**
     * @return Country
     */
    public function getFromCountry();

    /**
     * @return Country
     */
    public function getToCountry();

    /**
     * @return Service
     */
    public function getService();

    /**
     * @return WeightType
     */
    public function getWeightType();

    /**
     * @return Currency
     */
    public function getCurrency();

    /**
     * @return \DateTime
     */
    public function getActiveAt();

    /**
     * @return Zone
     */
    public function getZone();
}