<?php
/**
 * Created by IntelliJ IDEA.
 * User: mduncan
 * Date: 4/21/15
 * Time: 1:25 PM
 */

namespace Fulfillment\Postage\Exceptions;


class ValidationFailureException extends \Exception
{

    public $validationErrors;
    public $context;

    public function __construct($message = null, $errors = array(), \Exception $previous = null)
    {
        $this->validationErrors = $errors;

        $message = $message ?: 'The requested action failed validation.';

        if(!empty($this->validationErrors)){
            $message .= PHP_EOL;
            $message .= ' Failed tests: ' . PHP_EOL;
        }

        $message .= json_encode($this->validationErrors, JSON_PRETTY_PRINT);

        parent::__construct($message, $previous);
    }

}