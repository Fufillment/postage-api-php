<?php

namespace Fulfillment\Postage\Api;

use Fulfillment\Postage\Models\Request\Postage;
use Fulfillment\Postage\Exceptions\ValidationFailureException;

class PostageApi extends ApiRequestBase
{
    /**
     * @param Postage|array $postage
     * @param bool|true     $validateRequest
     *
     * @return Postage|array
     * @throws ValidationFailureException
     * @throws \JsonMapper_Exception
     */
    public function createPostage($postage, $validateRequest = true)
    {
        $this->tryValidation($postage, $validateRequest);

        $json = $this->apiClient->post('postage/', $postage);

        return $this->jsonOnly ? $json : $this->jsonMapper->map($json, new Postage());
    }
}