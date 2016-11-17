<?php


namespace Fulfillment\Postage\Api;


use Fulfillment\Postage\Models\Response\NormalizedRate;
use Fulfillment\Postage\Models\Response\PriceGroup;
use Fulfillment\Postage\Models\Response\Rate;

class RatesApi extends ApiRequestBase {
	/**
	 * Get an array of PriceGroup objects based on service, desination, and weight.
	 *
	 * Note: If the service is zone-based then zoneName is required
	 *
	 * @param int             $serviceId
	 * @param string          $sourceIso2
	 * @param string          $destinationIso2
	 * @param float           $weight
	 * @param null            $zoneName     Required if the service is zone-based
	 *
	 * @param null|string|int $fromPostalCode
	 * @param null|string|int $toPostalCode
	 * @param int             $weightTypeId Defaults to 1 (OZ)
	 *
	 * @return \Fulfillment\Postage\Models\Response\PriceGroup[]|mixed
	 */
	public function getPriceGroups($serviceId, $sourceIso2, $destinationIso2, $weight, $zoneName = null, $fromPostalCode = null, $toPostalCode = null, $weightTypeId = 1)
	{
		$queryString = [
			'serviceId'              => $serviceId,
			'destinationCountryISO2' => $destinationIso2,
			'sourceCountryISO2'      => $sourceIso2,
			'weight'                 => $weight,
			'weightTypeId'           => $weightTypeId,
			'fromPostalCode'         => $fromPostalCode,
			'toPostalCode'           => $toPostalCode,
			'XDEBUG_SESSION_START'   => 'postage',
		];

		if (null !== $zoneName)
		{
			$queryString['zoneName'] = $zoneName;
		}
		$json = $this->apiClient->get('rates/priceGroups/shipment', $queryString);

		return ($this->jsonOnly ? $json : $this->jsonMapper->mapArray($json, [], new NormalizedRate()));
	}
}