<?php

namespace Fulfillment\Postage\Models\Request;

use FoxxMD\Utilities\ArrayUtil;
use Fulfillment\Postage\Models\Request\Contracts\Validatable;
use Fulfillment\Postage\Models\Request\Base\BasePostage;
use Fulfillment\Postage\Models\Traits\SimpleSerializable;
use Fulfillment\Postage\Models\Traits\ValidatableBase;
use Respect\Validation\Validator as v;

class Postage extends BasePostage implements Validatable
{
    use ValidatableBase;
    use SimpleSerializable;

    public function __construct($data = null)
    {
        $this->shipper                          =   ArrayUtil::get($data['shipper']);
        $this->service                          =   ArrayUtil::get($data['service']);
        $this->referenceFields                  =   ArrayUtil::get($data['referenceFields']);
        $this->shipment                         =   ArrayUtil::get($data['shipment']);
    }

    /**
     * @return v[]
     */
    public function getValidationRules()
    {
        return [
            v::attribute('shipper',                 v::string()->notEmpty()),
            v::attribute('service',                 v::string()->notEmpty()),
            v::attribute('referenceFields',         v::instance('\Fulfillment\Postage\Models\Request\Contracts\ReferenceFields')->callback([$this->referenceFields, 'validate'])),
            v::attribute('shipment',                v::instance('\Fulfillment\Postage\Models\Request\Contracts\Shipment')->callback([$this->shipment, 'validate'])),
        ];
    }
}