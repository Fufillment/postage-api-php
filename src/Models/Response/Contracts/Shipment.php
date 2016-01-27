<?php

namespace Fulfillment\Postage\Models\Response\Contracts;


interface Shipment
{

    /**
     * @return int
     */
    public function getId();

    /**
     * @param int $id
     */
    public function setId($id);

    /**
     * @return float
     */
    public function getWeight();

    /**
     * @param float $weight
     */
    public function setWeight($weight);

    /**
     * @return string
     */
    public function getDescription();

    /**
     * @param string $description
     */
    public function setDescription($description);

    /**
     * @return WeightType
     */
    public function getWeightType();

    /**
     * @param WeightType $weightType
     */
    public function setWeightType($weightType);

    /**
     * @return Shipper
     */
    public function getShipper();

    /**
     * @param Shipper $shipper
     */
    public function setShipper($shipper);

    /**
     * @return Packaging
     */
    public function getPackaging();

    /**
     * @param Packaging $packaging
     */
    public function setPackaging($packaging);

    /**
     * @return Address
     */
    public function getToAddress();

    /**
     * @param Address $toAddress
     */
    public function setToAddress($toAddress);

    /**
     * @return Address
     */
    public function getFromAddress();

    /**
     * @param Address $fromAddress
     */
    public function setFromAddress($fromAddress);

    /**
     * @return Address
     */
    public function getReturnAddress();

    /**
     * @param Address $returnAddress
     */
    public function setReturnAddress($returnAddress);

    /**
     * @return CommodityItem[]
     */
    public function getCommodityItems();

    /**
     * @param CommodityItem[] $commodityItems
     */
    public function setCommodityItems($commodityItems);
}