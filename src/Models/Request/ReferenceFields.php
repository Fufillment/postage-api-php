<?php

namespace Fulfillment\Postage\Models\Request;

use FoxxMD\Utilities\ArrayUtil;
use Fulfillment\Postage\Models\Request\Contracts\Validatable;
use Fulfillment\Postage\Models\Request\Base\BaseReferenceFields;
use Fulfillment\Postage\Models\Traits\SimpleSerializable;
use Fulfillment\Postage\Models\Traits\ValidatableBase;
use Respect\Validation\Validator as v;

class ReferenceFields extends BaseReferenceFields implements Validatable
{

    use ValidatableBase;
    use SimpleSerializable;

    public function __construct($data = null)
    {
        $this->shipperReference                 =   ArrayUtil::get($data['shipperReference']);
        $this->consigneeReference               =   ArrayUtil::get($data['consigneeReference']);
        $this->reference1                       =   ArrayUtil::get($data['reference1']);
        $this->reference2                       =   ArrayUtil::get($data['reference2']);
        $this->reference3                       =   ArrayUtil::get($data['reference3']);
        $this->reference4                       =   ArrayUtil::get($data['reference4']);
        $this->reference5                       =   ArrayUtil::get($data['reference5']);
    }

    public function getValidationRules()
    {
        return [
            v::attribute('shipperReference',        v::oneOf(v::nullValue(), v::notEmpty())),
            v::attribute('consigneeReference',      v::oneOf(v::nullValue(), v::notEmpty())),
            v::attribute('reference1',              v::oneOf(v::nullValue(), v::notEmpty())),
            v::attribute('reference2',              v::oneOf(v::nullValue(), v::notEmpty())),
            v::attribute('reference3',              v::oneOf(v::nullValue(), v::notEmpty())),
            v::attribute('reference4',              v::oneOf(v::nullValue(), v::notEmpty())),
            v::attribute('reference5',              v::oneOf(v::nullValue(), v::notEmpty())),
        ];
    }
}