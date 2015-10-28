<?php


namespace Fulfillment\Postage\Models\Response;


use Fulfillment\Postage\Models\Response\Base\BaseShortUser;
use Fulfillment\Postage\Models\Response\Contracts\ShortUser as ShortUserContract;
use Fulfillment\Postage\Models\Traits\SimpleSerializable;

class ShortUser extends BaseShortUser implements ShortUserContract, \JsonSerializable
{
    use SimpleSerializable;
}