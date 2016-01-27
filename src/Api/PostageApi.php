<?php

namespace Fulfillment\Postage\Api;

use FoxxMD\Utilities\ArrayUtil;
use Fulfillment\Api\Utilities\RequestParser;
use Fulfillment\Postage\Exceptions\Factories\PostageValidationExceptionFactory;
use Fulfillment\Postage\Models\Request\Contracts\Postage as PostageContract;
use Fulfillment\Postage\Exceptions\ClientValidationException;
use Fulfillment\Postage\Models\Response\Contracts\Postage;
use Fulfillment\Postage\Models\Response\Postage as ResponsePostage;
use GuzzleHttp\Exception\RequestException;

class PostageApi extends ApiRequestBase
{
    /**
     * @param PostageContract|array $postage
     * @param bool|true             $validateRequest
     * @return array|ResponsePostage
     * @throws ClientValidationException
     * @throws \Fulfillment\Postage\Exceptions\PostageException|null
     * @throws \JsonMapper_Exception
     */
    public function createPostage($postage, $validateRequest = true)
    {
        $this->tryValidation($postage, $validateRequest);

        try {
            $json = $this->apiClient->post('postage', $postage);
        } catch (RequestException $e) {
            //use a more descriptive error if possible
            $error = RequestParser::parseError($e);
            $message = ArrayUtil::get($error['message']);
            $pException = PostageValidationExceptionFactory::fromErrorCode(RequestParser::getErrorCode($e), $message);
            if (!is_null($pException)) {
                throw $pException;
            } else{
                $pException = PostageValidationExceptionFactory::fromErrorMessage($message, ArrayUtil::get($error['validationErrors']));
                if(!is_null($pException)){
                    throw $pException;
                } else {
                    throw $e;
                }
            }
        }

        return ($this->jsonOnly ? $json : $this->jsonMapper->map($json, new ResponsePostage()));
    }

    /**
     * Void a Postage
     *
     * @param int|ResponsePostage $postage Either the Id of the object or the Postage object itself that should be voided
     */
    public function voidPostage($postage)
    {
        $id = $this->getPostageId($postage);

        $this->apiClient->delete("postage/$id");
    }

    /**
     * Get a Postage object
     *
     * @param int|ResponsePostage $postage Either the Id of the object or the Postage object itself to get
     *
     * @return array|ResponsePostage
     */
    public function getPostage($postage)
    {
        $id = $this->getPostageId($postage);

        $json = $this->apiClient->get("postage/$id");

        return ($this->jsonOnly ? $json : $this->jsonMapper->map($json, new ResponsePostage()));
    }

    /**
     * @param int|ResponsePostage $postage      Either the Id of the object or the Postage object
     * @param string              $documentType The label document to use for the label
     * @param string              $destination  Where the label should be printed to. Default is to only return the generated label
     *
     * @return mixed
     * @throws \Exception
     */
    public function getPostageLabel($postage, $documentType, $destination = 'response')
    {
        if (is_null($documentType)) {
            throw new \Exception('Must specify a document type');
        } elseif (!is_string($documentType)) {
            throw new \Exception('Document type must be a string');
        }
        $id = $this->getPostageId($postage);

        $response = $this->apiClient->get("postage/$id/label", ['documentId' => $documentType, 'destinationId' => $destination]);

        return $response;
    }

    /**
     * Get the Id for a postage object by parsing either the object or an int from the input
     *
     * @param int|ResponsePostage $postage Either the Id of the object or the Postage object itself to get
     *
     * @return int
     */
    private function getPostageId($postage)
    {
        $id = null;
        if (is_int($postage)) {
            $id = $postage;
        } elseif ($postage instanceof Postage) {
            $id = $postage->getId();
        }

        return $id;
    }
}