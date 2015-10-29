<?php

namespace Fulfillment\Postage\Api;

use Fulfillment\Postage\Models\Request\Contracts\Postage as PostageContract;
use Fulfillment\Postage\Exceptions\ValidationFailureException;
use Fulfillment\Postage\Models\Response\Postage as ResponsePostage;
use Fulfillment\Postage\Models\Request\Postage as RequestPostage;

class PostageApi extends ApiRequestBase
{
    /**
     * @param PostageContract|array $postage
     * @param bool|true     $validateRequest
     *
     * @return ResponsePostage|array
     * @throws ValidationFailureException
     * @throws \JsonMapper_Exception
     */
    public function createPostage($postage, $validateRequest = true)
    {
        $this->tryValidation($postage, $validateRequest);

        $json = $this->apiClient->post('postage', $postage);

        return ($this->jsonOnly ? $json : $this->jsonMapper->map($json, new ResponsePostage()));
    }
}