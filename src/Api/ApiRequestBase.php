<?php

namespace Fulfillment\Postage\Api;

use Fulfillment\Api\Api;
use Fulfillment\Postage\Exceptions\ClientValidationException;
use Fulfillment\Postage\Models\Request\Contracts\Validatable;

class ApiRequestBase {
	protected $apiClient;
	protected $jsonMapper;
	protected $jsonOnly;
	protected $validateRequests;

	/**
	 * @param Api  $apiClient
	 * @param bool $jsonOnly
	 * @param bool $validateRequests Default behavior for validating POST and PUT requests.  Will validate objects before making the request
	 */
	public function __construct(Api $apiClient, $jsonOnly = false, $validateRequests = true)
	{
		$this->jsonOnly         = $jsonOnly;
		$this->apiClient        = $apiClient;
		$this->jsonMapper       = new \JsonMapper();
		$this->validateRequests = $validateRequests;
	}

	public function setValidateRequests($bool)
	{
		$this->validateRequests = $bool;
	}

	public function isValidatingRequests()
	{
		return $this->validateRequests;
	}

	protected function shouldValidateRequest($individualRequestValidation)
	{
		if ($individualRequestValidation)
		{
			return true;
		}
		elseif ($this->validateRequests && $individualRequestValidation)
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	protected function tryValidation($payload, $validateRequest)
	{
		if ($payload instanceof Validatable && $this->shouldValidateRequest($validateRequest))
		{
			$result = $payload->validate();

			if ($result === false)
			{
				throw new ClientValidationException();
			}
		}
	}
}