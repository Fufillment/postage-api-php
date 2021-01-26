<?php


namespace Fulfillment\Postage\Models\Response;


use Fulfillment\Postage\Models\Traits\SimpleSerializable;

class FeatureVariant implements \Fulfillment\Postage\Models\Response\Contracts\FeatureVariant, \JsonSerializable
{
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

}