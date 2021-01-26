<?php

namespace Fulfillment\Postage\Models\Request\Contracts;

use Fulfillment\Postage\Models\Request\Base\BasePostageFeature;

interface BaseRateRequest extends \JsonSerializable
{
	/**
	 * @return int|string
	 */
	public function getReferenceId();

	/**
	 * @param int|string $referenceId
	 */
	public function setReferenceId($referenceId);

	/**
	 * @return string
	 */
	public function getShipper();

	/**
	 * @param string $shipper
	 */
	public function setShipper($shipper);

	/**
	 * @return string
	 */
	public function getService();

	/**
	 * @param string $service
	 */
	public function setService($service);

	/**
	 * @return BasePostageFeature[]
	 */
	public function getFeatures();

	/**
	 * @param BasePostageFeature[] $features
	 */
	public function setFeatures($features);

	/**
	 * @return float|int|string|null
	 */
	public function getCost();

	/**
	 * @param float|int|string|null $cost
	 */
	public function setCost($cost);

	/**
	 * @return string|null
	 */
	public function getZone();

	/**
	 * @param string|null $zone
	 */
	public function setZone($zone);
}