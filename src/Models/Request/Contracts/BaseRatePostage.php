<?php

namespace Fulfillment\Postage\Models\Request\Contracts;

interface BaseRatePostage extends \JsonSerializable
{
	/**
	 * @return Postage
	 */
	public function getPostage();

	/**
	 * @param Postage $postage
	 */
	public function setPostage($postage);

	/**
	 * @return \Fulfillment\Postage\Models\Request\Contracts\BaseRateRequest[]
	 */
	public function getRateRequests();

	/**
	 * @param \Fulfillment\Postage\Models\Request\Contracts\BaseRateRequest[] $rateRequests
	 */
	public function setRateRequests($rateRequests);

	public function addRateRequest(\Fulfillment\Postage\Models\Request\Contracts\BaseRateRequest $request);

	public function removeRateRequest(\Fulfillment\Postage\Models\Request\Contracts\BaseRateRequest $request);
}