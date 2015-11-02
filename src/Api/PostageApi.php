<?php

namespace Fulfillment\Postage\Api;

use Fulfillment\Postage\Models\Request\Contracts\Postage as PostageContract;
use Fulfillment\Postage\Exceptions\ValidationFailureException;
use Fulfillment\Postage\Models\Response\Contracts\Postage;
use Fulfillment\Postage\Models\Response\Postage as ResponsePostage;

class PostageApi extends ApiRequestBase
{
    /**
     * @param PostageContract|array $postage
     * @param bool|true             $validateRequest
     *
     * @return array|ResponsePostage
     * @throws ValidationFailureException
     * @throws \JsonMapper_Exception
     */
    public function create($postage, $validateRequest = true)
    {
        $this->tryValidation($postage, $validateRequest);

        $json = $this->apiClient->post('postage', $postage);

        return ($this->jsonOnly ? $json : $this->jsonMapper->map($json, new ResponsePostage()));
    }

    /**
     * Void a Postage
     *
     * @param int|ResponsePostage $postage Either the Id of the object or the Postage object itself that should be voided
     */
    public function void($postage)
    {
        $id = null;
        if (is_int($postage)) {
            $id = $postage;
        } elseif ($postage instanceof Postage) {
            $id = $postage->getId();
        }

        $this->apiClient->delete("postage/$id");
    }

    /**
     * Get a Postage object
     *
     * @param int|ResponsePostage $postage Either the Id of the object or the Postage object itself to get
     *
     * @return array|ResponsePostage
     */
    public function get($postage)
    {
        $id = null;
        if (is_int($postage)) {
            $id = $postage;
        } elseif ($postage instanceof Postage) {
            $id = $postage->getId();
        }

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
    public function getLabel($postage, $documentType, $destination = 'response')
    {
        if(is_null($documentType)){
            throw new \Exception('Must specify a document type');
        } elseif(!is_string($documentType)){
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