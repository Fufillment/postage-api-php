<?php

namespace Fulfillment\Postage\Models\Response\Contracts;


interface Integration {

	/**
	 * @return int
	 */
	public function getId();

	/**
	 * @param int $id
	 */
	public function setId($id);

	/**
	 * @return string
	 */
	public function getName();

	/**
	 * @param string $name
	 */
	public function setName($name);

	/**
	 * @return string
	 */
	public function getSymbol();

	/**
	 * @param string $symbol
	 */
	public function setSymbol($symbol);

	/**
	 * @return Provider
	 */
	public function getProvider();

	/**
	 * @param Provider $provider
	 */
	public function setProvider($provider);

}