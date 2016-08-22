<?php

namespace Fulfillment\Postage\Models\Response\Contracts;


interface Rate {

	/**
	 * @return Currency
	 */
	public function getCurrency();

	/**
	 * @param Currency $currency
	 */
	public function setCurrency($currency);

	/**
	 * @return PriceGroup
	 */
	public function getPriceGroup();

	/**
	 * @param PriceGroup $priceGroup
	 */
	public function setPriceGroup($priceGroup);

	/**
	 * @return float
	 */
	public function getBase();

	/**
	 * @param float $base
	 */
	public function setBase($base);

	/**
	 * @return float
	 */
	public function getTotal();

	/**
	 * @param float $total
	 */
	public function setTotal($total);

	/**
	 * @return TaxType
	 */
	public function getTaxType();

	/**
	 * @param TaxType $taxType
	 */
	public function setTaxType($taxType);

	/**
	 * @return float
	 */
	public function getTax();

	/**
	 * @param float $tax
	 */
	public function setTax($tax);

	/**
	 * @return FuelSurchargeType
	 */
	public function getFuelSurchargeType();

	/**
	 * @param FuelSurchargeType $fuelSurchargeType
	 */
	public function setFuelSurchargeType($fuelSurchargeType);

	/**
	 * @return float
	 */
	public function getFuelSurcharge();

	/**
	 * @param float $fuelSurcharge
	 */
	public function setFuelSurcharge($fuelSurcharge);

	/**
	 * @return Zone
	 */
	public function getZone();

	/**
	 * @param Zone $zone
	 */
	public function setZone($zone);


}