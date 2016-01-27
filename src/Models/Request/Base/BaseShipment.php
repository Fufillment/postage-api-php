<?php

namespace Fulfillment\Postage\Models\Request\Base;

use \Fulfillment\Postage\Models\Request\Contracts\Shipment as ShipmentContract;

abstract class BaseShipment implements ShipmentContract
{

    /**
     * @var string
     */
    protected $weightType;

    /**
     * @var float
     */
    protected $weight;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var BaseAddress
     */
    protected $toAddress;

    /**
     * @var BasePackaging
     */
    protected $packaging;

    /**
     * @var BaseCommodityItem[]
     */
    protected $commodityItems;


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
     * @return float
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param float $weight
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

    /**
     * @param $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return BaseAddress
     */
    public function getToAddress()
    {
        return $this->toAddress;
    }

    /**
     * @param $toAddress
     */
    public function setToAddress($toAddress)
    {
        $this->toAddress = $toAddress;
    }

    /**
     * @return BasePackaging
     */
    public function getPackaging()
    {
        return $this->packaging;
    }

    /**
     * @param $packaging
     */
    public function setPackaging($packaging)
    {
        $this->packaging = $packaging;
    }

    /**
     * @return BaseCommodityItem[]
     */
    public function getCommodityItems()
    {
        return $this->commodityItems;
    }

    /**
     * @param $commodityItems[]
     */
    public function setCommodityItems($commodityItems)
    {
        $this->commodityItems = $commodityItems;
    }

    /**
     * @param $commodityItem
     */
    public function addCommodityItem($commodityItem)
    {
        $this->commodityItems[] = $commodityItem;
    }

    /**
     * @param $commodityItem
     */
    public function removeCommodityItem($commodityItem)
    {
        if (($key = array_search($commodityItem, $this->commodityItems)) !== false) {
            unset($this->commodityItems[$key]);
        }

    }

}