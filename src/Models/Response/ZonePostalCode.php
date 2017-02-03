<?php


namespace Fulfillment\Postage\Models\Response;


use Fulfillment\Postage\Models\Traits\SimpleSerializable;

class ZonePostalCode implements Contracts\ZonePostalCode, \JsonSerializable {

	use SimpleSerializable;

	/**
	 * @var string
	 */
	public $fromPostalCode;

	/**
	 * @var int
	 */
	public $zone;

	/**
	 * @return int
	 */
	public function getZone()
	{
		return $this->zone;
	}

	/**
	 * @return string
	 */
	public function getPostalCode()
	{
		return $this->fromPostalCode;
	}
}