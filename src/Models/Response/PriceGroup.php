<?php

namespace Fulfillment\Postage\Models\Response;

use Fulfillment\Postage\Models\Response\Contracts\PriceGroup as PriceGroupContract;
use Fulfillment\Postage\Models\Traits\SimpleSerializable;

class PriceGroup implements PriceGroupContract, \JsonSerializable {

	use SimpleSerializable;

	/**
	 * @var int
	 */
	protected $id;

	/**
	 * @var string
	 */
	protected $name;

	/**
	 * @var string
	 */
	protected $symbol;

	/**
	 * @var Carrier
	 */
	protected $carrier;


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
	public function getName()
	{
		return $this->name;
	}

	/**
	 * @param string $name
	 */
	public function setName($name)
	{
		$this->name = $name;
	}

	/**
	 * @return string
	 */
	public function getSymbol()
	{
		return $this->symbol;
	}

	/**
	 * @param string $symbol
	 */
	public function setSymbol($symbol)
	{
		$this->symbol = $symbol;
	}

	/**
	 * @return Carrier
	 */
	public function getCarrier()
	{
		return $this->carrier;
	}

	/**
	 * @param Carrier $carrier
	 */
	public function setCarrier($carrier)
	{
		$this->carrier = $carrier;
	}

}