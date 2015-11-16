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

        switch($groupDigit){
            case 5:
                $messagePre = 'Validation failed for Address';
                $messageBody = ': ';
                switch($issueDigit){
                    case 00:
                        $messageBody .= 'Address was incomplete. Check to make sure all fields were populated.';
                        break;
                    case 05:
                        $messageBody .= 'Address was invalid.';
                        break;
                    case 10:
                        $messageBody .= 'Country was invalid.';
                        break;
                    case 15:
                        $messageBody .= 'StateProvince was invalid.';
                        break;
                    case 20:
                        $messageBody .= 'City was invalid.';
                        break;
                    case 25:
                        $messageBody .= 'Postal Code was invalid.';
                        break;
                    case 30:
                        $messageBody .= 'Street1 was invalid.';
                        break;
                    case 35:
                        $messageBody .= 'Street2 was invalid.';
                        break;
                    case 40:
                        $messageBody .= 'Recipient Name was invalid.';
                        break;
                    case 45:
                        $messageBody .= 'Recipient Company was invalid.';
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
                return new PostageValidationException($messagePre . $messageBody, $errorCode);
            case 6:
                $messagePre = 'A part of the postage object was invalid';
                $messageBody = ': ';
                switch($issueDigit){
                    case 00:
                        $messageBody .= 'Shipment weight is invalid for the chosen service.';
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
                return new PostageComponentException($messagePre . $messageBody, $errorCode);
            case 7:
                $messagePre = 'The chosen Service encountered an error';
                $messageBody = ': ';
                switch($issueDigit){
                    case 00:
                        $messageBody .= 'Destination address is not served by the chosen Service';
                        break;
                    case 05:
                        $messageBody .= 'Chosen service is not available in ToAddress country';
                        break;
                    default:
                        $messageBody .= $msg ?: 'Unknown error.';
                }
                return new PostageServiceException($messagePre . $messageBody, $errorCode);
                break;
            case 9:
                $messageBody = 'Postage creation failed for an unknown reason';
                return new PostageException($messageBody, $errorCode);
            default:
                return null;
        }
    }
}