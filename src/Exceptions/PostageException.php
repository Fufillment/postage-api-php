<?php


namespace Fulfillment\Postage\Exceptions;


class PostageException extends \Exception
{
    public $omsErrorCode = null;

    /**
     * PostageException constructor.
     * @param string     $message
     * @param int        $code
     * @param \Exception|null $previous
     * @param null       $omsErrorCode
     */
    public function __construct($message, $code = 0, \Exception $previous = null, $omsErrorCode = null)
    {
        $this->omsErrorCode = $omsErrorCode;
        parent::__construct($message, $code, $previous);
    }
}