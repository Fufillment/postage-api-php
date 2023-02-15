<?php


namespace Fulfillment\Postage\Api;


use Fulfillment\Postage\Models\Request\Base\BaseAddressValidationRequest;
use Fulfillment\Postage\Models\Request\Base\BaseCityStateLookupRequest;
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
	 * @return mixed
	 */
	public function validate($validationRequest, $queryString = null)
	{
		$json = $this->apiClient->post('address/validate', $validationRequest, $queryString);

		return ($this->jsonOnly ? $json : $this->jsonMapper->mapArray($json, [], ValidatedAddressResult::class));
	}

    /**
     * Lookup US-based city-state by postal code
     *
     *
     * @param BaseCityStateLookupRequest|array $validationRequest
     * @param array|null            $queryString
     *
     * @return mixed
     */
    public function cityStateLookup($validationRequest, $queryString = null)
    {

        $queryBuilder = [
            'shipper'           => $validationRequest->getShipper(),
            'service'        => $validationRequest->getService(),
            'zipcode'               => $validationRequest->getPostalCode(),
            'using' => $validationRequest->getUsing()
        ];
        $queryString = (is_array($queryString)) ? $queryString : [];
        $queryString = array_merge($queryString, $queryBuilder);

        $json = $this->apiClient->get('address/lookup/cityState', $queryString);

        return ($this->jsonOnly ? $json : $this->jsonMapper->mapArray($json, [], ValidatedAddressResult::class));
    }
}