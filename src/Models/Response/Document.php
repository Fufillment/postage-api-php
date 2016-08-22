<?php

namespace Fulfillment\Postage\Models\Response;

use Fulfillment\Postage\Models\Response\Contracts\Document as DocumentContract;
use Fulfillment\Postage\Models\Traits\SimpleSerializable;

class Document implements DocumentContract, \JsonSerializable {

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
	 * @var Client
	 */
	protected $client;

	/**
	 * @var Provider
	 */
	protected $provider;


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
	 * @return Client
	 */
	public function getClient()
	{
		return $this->client;
	}

	/**
	 * @param Client $client
	 */
	public function setClient($client)
	{
		$this->client = $client;
	}

	/**
	 * @return Provider
	 */
	public function getProvider()
	{
		return $this->provider;
	}

	/**
	 * @param Provider $provider
	 */
	public function setProvider($provider)
	{
		$this->provider = $provider;
	}


}