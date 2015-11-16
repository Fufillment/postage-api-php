<?php

namespace Fulfillment\Postage\Models\Traits;

use Fulfillment\Postage\Exceptions\ClientValidationException;
use Respect\Validation\Exceptions\ValidationExceptionInterface;
use Respect\Validation\Validator;

trait ValidatableBase
{
    private $shortName = null;

    /**
     * @return Validator[]
     */
    public abstract function getValidationRules();

    public function validate()
    {
        $errors = [];

        $rulesToRun = $this->getValidationRules();
        foreach ($rulesToRun as $validator) {
            try {
                $validator->check($this);
            } catch (ValidationExceptionInterface $e) {
                $this->populateShortName();

                $varName                            = current($validator->getRules())->getName();
                $errorMessage                       = str_replace('""', 'Property', $e->getMainMessage());
                $errors[$this->shortName][$varName] = $errorMessage;
            } catch (ClientValidationException $v) {
                $this->populateShortName();

                //this is from nested validation
                $errors[$this->shortName][current(array_keys($v->validationErrors))] = current($v->validationErrors);
            }
        }
        if (!empty($errors)) {
            throw new ClientValidationException("Validation failed for " . get_class($this), $errors);
        } else {
            return true;
        }
    }

    private function populateShortName()
    {
        if (is_null($this->shortName)) {
            $reflect            = new \ReflectionClass($this);
            $this->shortName          = $reflect->getShortName();
            $errors[$this->shortName] = [];
        }
    }

}