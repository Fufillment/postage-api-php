<?php


namespace Fulfillment\Postage\Api;


use Fulfillment\Postage\Models\Response\Contracts\ZonePostalCode as ZonePostalCodeContract;
use Fulfillment\Postage\Models\Response\ZonePostalCode;

class ZonesApi extends ApiRequestBase {
	/**
	 * Get the zones used for shipping from multiple postal codes to a single postal code using USPS
	 *
	 * @param string[] $fromPostalCodes
	 * @param string   $toPostalCode
	 *
	 * @return array|ZonePostalCodeContract
	 */
	public function getUSPSDomesticZones($fromPostalCodes, $toPostalCode)
	{
		$json = $this->apiClient->get("zones/domestic/usps", ['fromPostalCodes' => implode(',', $fromPostalCodes), 'toPostalCode' => $toPostalCode]);

		return ($this->jsonOnly ? $json : $this->jsonMapper->mapArray($json, [], ZonePostalCode::class));
	}
}