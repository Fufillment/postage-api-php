<?php

namespace Fulfillment\Postage\Models\Response;

use Fulfillment\Postage\Models\Response\Contracts\Packaging as PackagingContract;
use Fulfillment\Postage\Models\Traits\SimpleSerializable;

class Packaging implements PackagingContract, \JsonSerializable {

	use SimpleSerializable;

	/**
	 * @var int
	 */
	protected $id;

	/**
	 * @var float
	 */
	protected $length;

	/**
	 * @var float
	 */
	protected $width;

	/**
	 * @var float
	 */
	protected $height;

	/**
	 * @var DistanceType
	 */
	protected $distanceType;

	/**
	 * @var string
	 */
	protected $packageType;


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
	public function getLength()
	{
		return $this->length;
	}

	/**
	 * @param float $length
	 */
	public function setLength($length)
	{
		$this->length = $length;
	}

	/**
	 * @return float
	 */
	public function getWidth()
	{
		return $this->width;
	}

	/**
	 * @param float $width
	 */
	public function setWidth($width)
	{
		$this->width = $width;
	}

	/**
	 * @return float
	 */
	public function getHeight()
	{
		return $this->height;
	}

	/**
	 * @param float $height
	 */
	public function setHeight($height)
	{
		$this->height = $height;
	}

	/**
	 * @return DistanceType
	 */
	public function getDistanceType()
	{
		return $this->distanceType;
	}

	/**
	 * @param DistanceType $distanceType
	 */
	public function setDistanceType($distanceType)
	{
		$this->distanceType = $distanceType;
	}

	/**
	 * @param string|null $type
	 */
	public function setPackageType($type)
	{
		$this->packageType = $type;
	}

	/**
	 * @return string|null
	 */
	public function getPackageType()
	{
		return $this->packageType;
	}

}