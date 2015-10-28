<?php


namespace Fulfillment\Postage\Models\Response;


use Fulfillment\Postage\Models\Response\Base\BaseRate;
use Fulfillment\Postage\Models\Response\Contracts\Rate as RateContract;
use Fulfillment\Postage\Models\Traits\SimpleSerializable;

class Rate extends BaseRate implements RateContract, \JsonSerializable
{
    use SimpleSerializable;
}