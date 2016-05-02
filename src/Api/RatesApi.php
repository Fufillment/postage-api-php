<?php


namespace Fulfillment\Postage\Api;


use Fulfillment\Postage\Models\Response\NormalizedRate;
use Fulfillment\Postage\Models\Response\PriceGroup;
use Fulfillment\Postage\Models\Response\Rate;

class RatesApi extends ApiRequestBase
{
    /**
     * Get an array of PriceGroup objects based on service, desination, and weight.
     *
     * Note: If the service is zone-based then zoneName is required
     *
     * @param int    $serviceId
     * @param string $destinationIso2
     * @param float  $weight
     * @param int    $weightTypeId Defaults to 1 (OZ)
     * @param null   $zoneName     Required if the service is zone-based
     *
     * @return mixed|PriceGroup[]
     */
    public function getPriceGroups($serviceId, $destinationIso2, $weight, $zoneName = null, $weightTypeId = 1)
    {
        $queryString = ['serviceId' => $serviceId, 'destinationCountryISO2' => $destinationIso2, 'weight' => $weight, 'weightTypeId' => $weightTypeId];

        if(!is_null($zoneName)) {
            $queryString['zoneName'] = $zoneName;
        }
        $json = $this->apiClient->get("rates/priceGroups/shipment" , $queryString);

        return ($this->jsonOnly ? $json : $this->jsonMapper->mapArray($json, array(), new NormalizedRate()));
    }
}