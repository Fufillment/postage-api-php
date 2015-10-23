<?php

namespace Fulfillment\Postage\Models\Request;


use FoxxMD\Utilities\ArrayUtil;
use Fulfillment\Postage\Models\Request\Contracts\Validatable;
use Fulfillment\Postage\Models\Request\Base\BaseToAddress;
use Fulfillment\Postage\Models\Traits\SimpleSerializable;
use Fulfillment\Postage\Models\Traits\ValidatableBase;

use Respect\Validation\Validator as v;

class ToAddress extends BaseToAddress implements Validatable
{
    use ValidatableBase;
    use SimpleSerializable;

    public function __construct($data = null)
    {
        $this->email         = ArrayUtil::get($data['email']);
        $this->name          = ArrayUtil::get($data['lastName']);
        $this->street1       = ArrayUtil::get($data['street1']);
        $this->street2       = ArrayUtil::get($data['street2']);
        $this->city          = ArrayUtil::get($data['city']);
        $this->stateProvince = ArrayUtil::get($data['stateProvince']);
        $this->postalCode    = ArrayUtil::get($data['postalCode']);
        $this->country       = ArrayUtil::get($data['country']);
        $this->phone         = ArrayUtil::get($data['phone']);
        $this->company       = ArrayUtil::get($data['company']);
    }

    public function getValidationRules()
    {
        return [
            v::attribute('email', v::notEmpty()->email()),
            v::attribute('name', v::notEmpty()->alpha()),
            v::attribute('street1', v::string()->notEmpty()),
            v::attribute('city', v::alpha()->notEmpty()),
            v::attribute('stateProvince', v::alpha()->notEmpty()),
            v::attribute('postalCode', v::int()->notEmpty()),
            v::attribute('country', v::countryCode()->notEmpty())
        ];
    }

}