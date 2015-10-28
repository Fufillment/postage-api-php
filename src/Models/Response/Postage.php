<?php


namespace Fulfillment\Postage\Models\Response;

use Fulfillment\Postage\Models\Response\Base\BasePostage;
use Fulfillment\Postage\Models\Response\Contracts\Postage as PostageContract;
use Fulfillment\Postage\Models\Traits\SimpleSerializable;

class Postage extends BasePostage implements PostageContract, \JsonSerializable
{
    use SimpleSerializable;
}