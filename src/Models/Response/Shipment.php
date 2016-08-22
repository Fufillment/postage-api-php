<?php

namespace Fulfillment\Postage\Models\Response;

use Fulfillment\Postage\Models\Response\Contracts\Shipment as ShipmentContract;
use Fulfillment\Postage\Models\Traits\SimpleSerializable;

class Shipment implements ShipmentContract, \JsonSerializable {

	use SimpleSerializable;

	/**
	 * @var int
	 */
	protected $id;

	/**
	 * @var float
	 */
	protected $weight;

	/**
	 * @var string
	 */
	protected $description;

	/**
	 * @var WeightType
	 */
	protected $weightType;

	/**
	 * @var Shipper
	 */
	protected $shipper;

	/**
	 * @var Packaging
	 */
	protected $packaging;


	/**
	 * @var Address
	 */
	protected $toAddress;

	/**
	 * @var Address
	 */
	protected $fromAddress;

	/**
	 * @var Address
	 */
	protected $returnAddress;

	/**
	 * @var CommodityItem[]
	 */
	protected $commodityItems;


	/**
	 * @return int
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * @param int $id
	 */
	public function setId($id)
	{
		$this->id = $id;
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
	 * @return string
	 */
	public function getDescription()
	{
		return $this->description;
	}

	/**
	 * @param string $description
	 */
	public function setDescription($description)
	{
		$this->description = $description;
	}

	/**
	 * @return WeightType
	 */
	public function getWeightType()
	{
		return $this->weightType;
	}

	/**
	 * @param WeightType $weightType
	 */
	public function setWeightType($weightType)
	{
		$this->weightType = $weightType;
	}

	/**
	 * @return Shipper
	 */
	public function getShipper()
	{
		return $this->shipper;
	}

	/**
	 * @param Shipper $shipper
	 */
	public function setShipper($shipper)
	{
		$this->shipper = $shipper;
	}

	/**
	 * @return Packaging
	 */
	public function getPackaging()
	{
		return $this->packaging;
	}

	/**
	 * @param Packaging $packaging
	 */
	public function setPackaging($packaging)
	{
		$this->packaging = $packaging;
	}

	/**
	 * @return Address
	 */
	public function getToAddress()
	{
		return $this->toAddress;
	}

	/**
	 * @param Address $toAddress
	 */
	public function setToAddress($toAddress)
	{
		$this->toAddress = $toAddress;
	}

	/**
	 * @return Address
	 */
	public function getFromAddress()
	{
		return $this->fromAddress;
	}

	/**
	 * @param Address $fromAddress
	 */
	public function setFromAddress($fromAddress)
	{
		$this->fromAddress = $fromAddress;
	}

	/**
	 * @return Address
	 */
	public function getReturnAddress()
	{
		return $this->returnAddress;
	}

	/**
	 * @param Address $returnAddress
	 */
	public function setReturnAddress($returnAddress)
	{
		$this->returnAddress = $returnAddress;
	}

	/**
	 * @return CommodityItem[]
	 */
	public function getCommodityItems()
	{
		return $this->commodityItems;
	}

	/**
	 * @param CommodityItem[] $commodityItems
	 */
	public function setCommodityItems($commodityItems)
	{
		$this->commodityItems = $commodityItems;
	}

}