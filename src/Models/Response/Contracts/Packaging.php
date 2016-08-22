<?php

namespace Fulfillment\Postage\Models\Response\Contracts;


interface Packaging {

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
	public function getLength();

	/**
	 * @param float $length
	 */
	public function setLength($length);

	/**
	 * @return float
	 */
	public function getWidth();

	/**
	 * @param float $width
	 */
	public function setWidth($width);

	/**
	 * @return float
	 */
	public function getHeight();

	/**
	 * @param float $height
	 */
	public function setHeight($height);

	/**
	 * @return DistanceType
	 */
	public function getDistanceType();

	/**
	 * @param DistanceType $distanceType
	 */
	public function setDistanceType($distanceType);

}