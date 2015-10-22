<?php

namespace Fulfillment\Postage\Models\Traits;

use Fulfillment\Postage\Exceptions\ValidationFailureException;
use Respect\Validation\Exceptions\ExceptionInterface;
use Respect\Validation\Validator;

trait ValidatableBase
{
    /**
     * @return Validator[]
     */
    public abstract function getValidationRules();

    public function validate()
    {
        $errors     = [];
        $rulesToRun = $this->getValidationRules();
        foreach ($rulesToRun as $validator) {
            try {
                $validator->check($this);
            } catch (ExceptionInterface $e) {
                $varName          = current($validator->getRules())->getName();
                $errors[$varName] = $e->getMainMessage();
            }
        }
        if (!empty($errors)) {
            throw new ValidationFailureException("Validation failed for this object.", $errors);
        } else {
            return true;
        }
    }
}