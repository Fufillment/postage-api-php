<?php

namespace Fulfillment\Postage\Models\Response;

use Fulfillment\Postage\Models\Response\Contracts\CommodityItem as CommodityItemContract;
use Fulfillment\Postage\Models\Traits\SimpleSerializable;

class CommodityItem implements CommodityItemContract, \JsonSerializable {

	use SimpleSerializable;


	/**
	 * @var int
	 */
	protected $id;

	/**
	 * @var string
	 */
	protected $code;

	/**
	 * @var string
	 */
	protected $description;

	/**
	 * @var int
	 */
	protected $quantity;

	/**
	 * @var float
	 */
	protected $unitValue;

	/**
	 * @var float
	 */
	protected $unitWeight;

	/**
	 * @var string
	 */
	protected $tariffNumber;

	/**
	 * @var Country
	 */
	protected $fromCountry;

	/**
	 * @var Currency
	 */
	protected $currency;

	/**
	 * @var WeightType
	 */
	protected $weightType;


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
	 * @return string
	 */
	public function getCode()
	{
		return $this->code;
	}

	/**
	 * @param string $code
	 */
	public function setCode($code)
	{
		$this->code = $code;
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
	 * @return int
	 */
	public function getQuantity()
	{
		return $this->quantity;
	}

	/**
	 * @param int $quantity
	 */
	public function setQuantity($quantity)
	{
		$this->quantity = $quantity;
	}

	/**
	 * @return float
	 */
	public function getUnitValue()
	{
		return $this->unitValue;
	}

	/**
	 * @param float $unitValue
	 */
	public function setUnitValue($unitValue)
	{
		$this->unitValue = $unitValue;
	}

	/**
	 * @return float
	 */
	public function getUnitWeight()
	{
		return $this->unitWeight;
	}

	/**
	 * @param float $unitWeight
	 */
	public function setUnitWeight($unitWeight)
	{
		$this->unitWeight = $unitWeight;
	}

	/**
	 * @return string
	 */
	public function getTariffNumber()
	{
		return $this->tariffNumber;
	}

	/**
	 * @param string $tariffNumber
	 */
	public function setTariffNumber($tariffNumber)
	{
		$this->tariffNumber = $tariffNumber;
	}

	/**
	 * @return Country
	 */
	public function getFromCountry()
	{
		return $this->fromCountry;
	}

	/**
	 * @param Country $fromCountry
	 */
	public function setFromCountry($fromCountry)
	{
		$this->fromCountry = $fromCountry;
	}

	/**
	 * @return Currency
	 */
	public function getCurrency()
	{
		return $this->currency;
	}

	/**
	 * @param Currency $currency
	 */
	public function setCurrency($currency)
	{
		$this->currency = $currency;
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

}