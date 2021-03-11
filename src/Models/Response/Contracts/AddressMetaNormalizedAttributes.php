<?php

namespace Fulfillment\Postage\Models\Response\Contracts;

interface AddressMetaNormalizedAttributes
{
	/**
	 * @return string
	 */
	public function getSymbol();

	/**
	 * @param string $symbol
	 */
	public function setSymbol($symbol);

	/**
	 * @return bool
	 */
	public function isError();

	/**
	 * @param bool $error
	 */
	public function setError($error);

	/**
	 * @return string
	 */
	public function getMsg();

	/**
	 * @param string $msg
	 */
	public function setMsg($msg);

	/**
	 * @return mixed
	 */
	public function getValue();

	/**
	 * @param mixed $value
	 */
	public function setValue($value);

	/**
	 * @return mixed
	 */
	public function getDetail();

	/**
	 * @param mixed $detail
	 */
	public function setDetail($detail);
}