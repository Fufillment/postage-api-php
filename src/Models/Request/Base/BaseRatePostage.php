<?php


namespace Fulfillment\Postage\Models\Request\Base;


use Fulfillment\Postage\Models\Request\Contracts\Postage;

abstract class BaseRatePostage implements \Fulfillment\Postage\Models\Request\Contracts\BaseRatePostage
{
	/**
	 * @var BasePostage
	 */
	protected $postage;

	/**
	 * @var BaseRateRequest[]
	 */
	protected $rateRequests;

	/**
	 * @return Postage
	 */
	public function getPostage()
	{
		return $this->postage;
	}

	/**
	 * @param Postage $postage
	 */
	public function setPostage($postage)
	{
		$this->postage = $postage;
	}

	/**
	 * @return \Fulfillment\Postage\Models\Request\Contracts\BaseRateRequest[]
	 */
	public function getRateRequests()
	{
		return $this->rateRequests;
	}

	/**
	 * @param \Fulfillment\Postage\Models\Request\Contracts\BaseRateRequest[] $rateRequests
	 */
	public function setRateRequests($rateRequests)
	{
		$this->rateRequests = $rateRequests;
	}

	public function addRateRequest(\Fulfillment\Postage\Models\Request\Contracts\BaseRateRequest $request)
	{
		$this->rateRequests[] = $request;
	}

	public function removeRateRequest(\Fulfillment\Postage\Models\Request\Contracts\BaseRateRequest $request)
	{
		if (($key = array_search($request, $this->rateRequests)) !== false)
		{
			unset($this->rateRequests[ $key ]);
		}
	}
}