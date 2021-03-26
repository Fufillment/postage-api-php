<?php


namespace Fulfillment\Postage\Models\Response;


use Fulfillment\Postage\Models\Traits\SimpleSerializable;
use \Fulfillment\Postage\Models\Response\Contracts\AddressMetaNormalizedAttributes as AttrContract;

class AddressMetaNormalizedAttributes implements AttrContract, \JsonSerializable
{
	use SimpleSerializable;

	/**
	 * @var string
	 */
	public $symbol;

	/**
	 * @var boolean|null
	 */
	public $error;

	/**
	 * @var string
	 */
	public $msg;

	/**
	 * @var mixed
	 */
	public $value;

	/**
	 * @var mixed
	 */
	public $detail;

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
	 * @return bool
	 */
	public function isError()
	{
		return $this->error === null ? false : $this->error;
	}

	/**
	 * @param bool|null $error
	 */
	public function setError($error)
	{
		$this->error = $error;
	}

	public function getError()
	{
		return $this->error;
	}

	/**
	 * @return string
	 */
	public function getMsg()
	{
		return $this->msg;
	}

	/**
	 * @param string $msg
	 */
	public function setMsg($msg)
	{
		$this->msg = $msg;
	}

	/**
	 * @return mixed
	 */
	public function getValue()
	{
		return $this->value;
	}

	/**
	 * @param mixed $value
	 */
	public function setValue($value)
	{
		$this->value = $value;
	}

	/**
	 * @return mixed
	 */
	public function getDetail()
	{
		return $this->detail;
	}

	/**
	 * @param mixed $detail
	 */
	public function setDetail($detail)
	{
		$this->detail = $detail;
	}
}