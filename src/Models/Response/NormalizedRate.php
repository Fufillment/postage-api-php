<?php


namespace Fulfillment\Postage\Models\Response;

use Fulfillment\Postage\Models\Response\Contracts\NormalizedRate as NormalizedRateContract;
use Fulfillment\Postage\Models\Response\Contracts\PriceGroup;
use Fulfillment\Postage\Models\Traits\SimpleSerializable;

class NormalizedRate implements NormalizedRateContract, \JsonSerializable {
	use SimpleSerializable;

	/**
	 * @var float
	 */
	public $weight;

	/**
	 * @var float
	 */
	public $minWeight;

	/**
	 * @var float
	 */
	public $maxWeight;

	/**
	 * @var float
	 */
	public $basePrice;

	/**
	 * @var float
	 */
	public $baseSignaturePrice;

	/**
	 * @var \DateTime
	 */
	public $activeAt;

	/**
	 * @var PriceGroup
	 */
	public $priceGroup;

	/**
	 * @var Country
	 */
	public $toCountry;

	/**
	 * @var Country
	 */
	public $fromCountry;

	/**
	 * @var Service
	 */
	public $service;

	/**
	 * @var WeightType
	 */
	public $weightType;

	/**
	 * @var Currency
	 */
	public $currency;

	/**
	 * @var Zone
	 */
	public $zone;

	/**
	 * @return float
	 */
	public function getWeight()
	{
		return $this->weight;
	}

	/**
	 * @return float
	 */
	public function getMinWeight()
	{
		return $this->minWeight;
	}

	/**
	 * @return float
	 */
	public function getMaxWeight()
	{
		return $this->maxWeight;
	}

	/**
	 * @return float
	 */
	public function getBasePrice()
	{
		return $this->basePrice;
	}

	/**
	 * @return float
	 */
	public function getBaseSignaturePrice()
	{
		return $this->baseSignaturePrice;
	}

	/**
	 * @return PriceGroup
	 */
	public function getPriceGroup()
	{
		return $this->priceGroup;
	}

	/**
	 * @return Country
	 */
	public function getFromCountry()
	{
		return $this->fromCountry;
	}

	/**
	 * @return Country
	 */
	public function getToCountry()
	{
		return $this->toCountry;
	}

	/**
	 * @return Service
	 */
	public function getService()
	{
		return $this->service;
	}

	/**
	 * @return WeightType
	 */
	public function getWeightType()
	{
		return $this->weightType;
	}

	/**
	 * @return Currency
	 */
	public function getCurrency()
	{
		return $this->currency;
	}

	/**
	 * @return \DateTime
	 */
	public function getActiveAt()
	{
		return $this->activeAt;
	}

	/**
	 * Set the DateTime this Rate is active from.
	 *
	 * Note: Used only for JsonMapper in order to properly set a DateTime, no real use
	 *
	 * @param mixed
	 *
	 */
	public function setActiveAt($object)
	{
		$this->activeAt = new \DateTime($object->date);
	}

	/**
	 * @return Zone
	 */
	public function getZone()
	{
		return $this->zone;
	}
}