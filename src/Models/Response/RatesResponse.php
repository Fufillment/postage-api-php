<?php


namespace Fulfillment\Postage\Models\Response;


use Fulfillment\Postage\Models\Traits\SimpleSerializable;

class RatesResponse implements \JsonSerializable
{
	use SimpleSerializable;

	/**
	 * @var Rate
	 */
	protected $rate;

	/**
	 * @var Rate[]
	 */
	protected $markUpRates;

	/**
	 * @return Rate
	 */
	public function getRate()
	{
		return $this->rate;
	}

	/**
	 * @param Rate $rate
	 */
	public function setRate($rate)
	{
		$this->rate = $rate;
	}

	/**
	 * @return Rate[]
	 */
	public function getMarkUpRates()
	{
		return $this->markUpRates;
	}

	/**
	 * @param Rate[] $markUpRates
	 */
	public function setMarkUpRates($markUpRates)
	{
		$this->markUpRates = $markUpRates;
	}
}