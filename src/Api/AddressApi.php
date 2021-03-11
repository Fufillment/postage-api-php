<?php


namespace Fulfillment\Postage\Api;


use Fulfillment\Postage\Models\Request\Base\BaseAddressValidationRequest;
use Fulfillment\Postage\Models\Response\AddressValidationResponse;
use Fulfillment\Postage\Models\Response\ValidatedAddressResult;

class AddressApi extends ApiRequestBase
{
	/**
	 * Validate an address using a shipper-service
	 *
	 *
	 * @param BaseAddressValidationRequest|array $validationRequest
	 * @param array|null            $queryString
	 *
	 * @return AddressValidationResponse|mixed
	 */
	public function validate($validationRequest, $queryString = null)
	{
		$json = $this->apiClient->post('address/validate', $validationRequest, $queryString);

		return ($this->jsonOnly ? $json : $this->jsonMapper->mapArray($json, [], new ValidatedAddressResult()));
	}
}