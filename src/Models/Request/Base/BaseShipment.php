<?php

namespace Fulfillment\Postage\Models\Request\Base;

use \Fulfillment\Postage\Models\Request\Contracts\Shipment as ShipmentContract;

abstract class BaseShipment implements ShipmentContract
{
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
     * @return BaseShipment
     */
    public function setWeightType($weightType)
    {
        $this->weightType = $weightType;

        return $this;
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
     *
     * @return BaseShipment
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * @return string
     */
    public function getToAddress()
    {
        return $this->toAddress;
    }

    /**
     * @param string $toAddress
     *
     * @return BaseShipment
     */
    public function setToAddress($toAddress)
    {
        $this->toAddress = $toAddress;

        return $this;
    }

    /**
     * @return string
     */
    public function getPackaging()
    {
        return $this->packaging;
    }

    /**
     * @param string $packaging
     *
     * @return BaseShipment
     */
    public function setPackaging($packaging)
    {
        $this->packaging = $packaging;

        return $this;
    }

    /**
     * @return CommodityItem[]
     */
    public function getCommodityItems()
    {
        return $this->commodityItems;
    }

    /**
     * @param BaseCommodityItem[] $commodityItems
     *
     * @return BaseShipment
     */
    public function setCommodityItems($commodityItems)
    {
        $this->commodityItems = $commodityItems;

        return $this;
    }

    /**
     * @param BaseCommodityItem $commodityItem
     *
     * @return BaseShipment
     */
    public function addCommodityItem($commodityItem)
    {
        $this->commodityItems[] = $commodityItem;

        return $this;
    }

    /**
     * @param BaseCommodityItem $commodityItem
     */
    public function removeCommodityItem($commodityItem)
    {
        if (($key = array_search($commodityItem, $this->commodityItems)) !== false) {
            unset($this->commodityItems[$key]);
        }

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
     * @var string
     */
    protected $description;
}