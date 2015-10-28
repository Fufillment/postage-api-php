<?php


namespace Fulfillment\Postage\Models\Response;


use Fulfillment\Postage\Models\Response\Base\BaseTrackingNumber;
use Fulfillment\Postage\Models\Response\Contracts\TrackingNumber as TrackingNumberContract;
use Fulfillment\Postage\Models\Traits\SimpleSerializable;

class TrackingNumber extends BaseTrackingNumber implements TrackingNumberContract, \JsonSerializable
{
    use SimpleSerializable;
}