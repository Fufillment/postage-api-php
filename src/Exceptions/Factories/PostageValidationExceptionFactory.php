<?php


namespace Fulfillment\Postage\Exceptions\Factories;


use Fulfillment\Postage\Exceptions\PostageComponentException;
use Fulfillment\Postage\Exceptions\PostageException;
use Fulfillment\Postage\Exceptions\PostageServiceException;
use Fulfillment\Postage\Exceptions\PostageValidationException;

class PostageValidationExceptionFactory
{
    /**
     * Return a more descriptive validation exception generated from an error code
     *
     * @param int  $errorCode
     * @param null $msg
     * @return PostageException|null
     */
    public static function fromErrorCode($errorCode, $msg = null)
    {
        $groupDigit = substr($errorCode, 0, 1);
        $issueDigit = substr($errorCode, 1, 2);
        $omsCode = 0;
        $messageBody = ': ';

        switch($groupDigit){
            case 5:
                $messagePre = 'Validation failed for Address';
                switch($issueDigit){
                    case 00:
                        $messageBody .= 'Address was incomplete. Check to make sure all fields were populated.';
                        $omsCode = 11;
                        break;
                    case 05:
                        $messageBody .= 'Address was invalid.';
                        $omsCode = 16;
                        break;
                    case 10:
                        $messageBody .= 'Country was invalid.';
                        $omsCode = 19;
                        break;
                    case 15:
                        $messageBody .= 'StateProvince was invalid.';
                        $omsCode = 15;
                        break;
                    case 20:
                        $messageBody .= 'City was invalid.';
                        $omsCode = 14;
                        break;
                    case 25:
                        $messageBody .= 'Postal Code was invalid.';
                        $omsCode = 18;
                        break;
                    case 30:
                        $messageBody .= 'Street1 was invalid.';
                        $omsCode = 33;
                        break;
                    case 35:
                        $messageBody .= 'Street2 was invalid.';
                        $omsCode = 33;
                        break;
                    case 40:
                        $messageBody .= 'Recipient Name was invalid.';
                        $omsCode = 11;
                        break;
                    case 45:
                        $messageBody .= 'Recipient Company was invalid.';
                        $omsCode = 11;
                        break;
                    case 50:
                        $messageBody .= 'Invalid credentials supplied to integration';
                        return new PostageException($messageBody, $errorCode);
                    case 55:
                        $messageBody .= 'Recipient phone number was invalid';
                        break;
                    default:
                        $messageBody .= $msg ?: 'Unknown error';
                }
                return new PostageValidationException($messagePre . $messageBody, $errorCode, null, $omsCode);
            case 6:
                $messagePre = 'A part of the postage object was invalid';
                $messageBody = ': ';
                switch($issueDigit){
                    case 00:
                        $messageBody .= 'Shipment weight is invalid for the chosen service.';
                        $omsCode = 37;
                        break;
                    case 05:
                        $messageBody .= 'The weight of the Commodity Items exceeds the Shipment weight.';
                        break;
                    case 10:
                        $messageBody .= 'A description must be provided for the Shipment.';
                        break;
                    case 15:
                        $messageBody .= 'Ship Date was invalid. Check to make sure you are using the right format.';
                        break;
                    case 20:
                        $messageBody .= 'Missing or invalid export reason.';
                        break;
                    case 25:
                        $messageBody .= 'A Commodity Item has an invalid weight.';
                        break;
                    default:
                        $messageBody .= $msg ?: 'Unknown error.';
                }
                return new PostageComponentException($messagePre . $messageBody, $errorCode, null, $omsCode);
            case 7:
                $messagePre = 'The chosen Service encountered an error';
                $messageBody = ': ';
                switch($issueDigit){
                    case 00:
                        $messageBody .= 'Destination address is not served by the chosen Service';
                        break;
                    case 05:
                        $messageBody .= 'Service is not available in specified country (see ToAddress)';
                        break;
                    default:
                        $messageBody .= $msg ?: 'Unknown error.';
                }
                return new PostageServiceException($messagePre . $messageBody, $errorCode, null, $omsCode);
                break;
            case 9:
                $messageBody = 'Postage creation failed for an unknown reason' . (!is_null($msg) ? (': ' . $msg) : '.');
                return new PostageException($messageBody, $errorCode, null, $omsCode);
            default:
                return null;
        }
    }

    public static function fromErrorMessage($message = null, $validationError = null){
        //addresses first
        $messageBody = ': ';
        $omsCode = null;

        if(is_null($message)){
            return null;
        }

        if(strpos(strtolower($message), 'address') !== false){
            $messagePre = 'Validation failed for Address';
            $omsCode = 11;
            if(!is_null($validationError)){
                if(strpos(strtolower($validationError), 'postalcode') !== false){
                    $omsCode = 18;
                    $messageBody .= 'Invalid PostalCode';
                } elseif(strpos(strtolower($validationError), 'country') !== false){
                    $omsCode = 19;
                    $messageBody .= 'Invalid Country';
                }
            }
            return new PostageValidationException($messagePre . $messageBody, 0, null, $omsCode);
        }

        return null;
    }
}