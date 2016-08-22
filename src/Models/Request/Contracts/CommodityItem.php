<?php

namespace Fulfillment\Postage\Models\Request\Contracts;

interface CommodityItem extends \JsonSerializable {
	/**
	 * @return string
	 */
	public function getFromCountry();

	/**
	 * @param string $fromCountry
	 *
	 */
	public function setFromCountry($fromCountry);

	/**
	 * @return string
	 */
	public function getCurrency();

	/**
	 * @param string $currency
	 *
	 */
	public function setCurrency($currency);

	/**
	 * @return string
	 */
	public function getWeightType();

	/**
	 * @param string $weightType
	 *
	 */
	public function setWeightType($weightType);

	/**
	 * @return string
	 */
	public function getCode();

	/**
	 * @param string $code
	 *
	 */
	public function setCode($code);

	/**
	 * @return string
	 */
	public function getDescription();

	/**
	 * @param string $description
	 *
	 */
	public function setDescription($description);

	/**
	 * @return int
	 */
	public function getQuantity();

	/**
	 * @param int $quantity
	 *
	 */
	public function setQuantity($quantity);

	/**
	 * @return float
	 */
	public function getUnitValue();

	/**
	 * @param float $unitValue
	 *
	 */
	public function setUnitValue($unitValue);

	/**
	 * @return float
	 */
	public function getUnitWeight();

	/**
	 * @param float $unitWeight
	 *
	 */
	public function setUnitWeight($unitWeight);

	/**
	 * @return int
	 */
	public function getTariffNumber();

	/**
	 * @param int $tariffNumber
	 *
	 */
	public function setTariffNumber($tariffNumber);
}