<?php

namespace Fulfillment\Postage\Models\Response;

use Fulfillment\Postage\Models\Response\Contracts\User as UserContract;
use Fulfillment\Postage\Models\Traits\SimpleSerializable;

class User implements UserContract, \JsonSerializable {
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
	protected $email;

	/**
	 * @var Client
	 */
	protected $client;


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
	public function getEmail()
	{
		return $this->email;
	}

	/**
	 * @param string $email
	 */
	public function setEmail($email)
	{
		$this->email = $email;
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


}