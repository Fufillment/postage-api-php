<?php

namespace Fulfillment\Postage\Models\Request\Contracts;

interface Shipment extends \JsonSerializable {
	/**
	 * @return string
	 */
	public function getWeightType();

	/**
	 * @param string $weightType
	 */
	public function setWeightType($weightType);

	/**
	 * @return float
	 */
	public function getWeight();

	/**
	 * @param float $weight
	 */
	public function setWeight($weight);

	/**
	 * @return Address
	 */
	public function getToAddress();

	/**
	 * @param string $toAddress
	 */
	public function setToAddress($toAddress);

	/**
	 * @return Address
	 */
	public function getFromAddress();

	/**
	 * @param string $fromAddress
	 */
	public function setFromAddress($fromAddress);

	/**
	 * @return Address
	 */
	public function getReturnAddress();

	/**
	 * @param string $returnAddress
	 */
	public function setReturnAddress($returnAddress);

	/**
	 * @return Packaging
	 */
	public function getPackaging();

	/**
	 * @param string $packaging
	 */
	public function setPackaging($packaging);

	/**
	 * @return CommodityItem[]
	 */
	public function getCommodityItems();

	/**
	 * @param CommodityItem[] $commodityItems
	 */
	public function setCommodityItems($commodityItems);

	/**
	 * @param CommodityItem $commodityItem
	 */
	public function addCommodityItem($commodityItem);

	/**
	 * @param CommodityItem $commodityItem
	 */
	public function removeCommodityItem($commodityItem);

	/**
	 * @param string $description
	 */
	public function setDescription($description);

	/**
	 * @return string
	 */
	public function getDescription();
}