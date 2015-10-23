<?php

namespace Fulfillment\Postage\Api;

use Fulfillment\Postage\Models\Request\Contracts\Postage as PostageContract;
use Fulfillment\Postage\Exceptions\ValidationFailureException;
use Fulfillment\Postage\Models\Request\Postage;

class PostageApi extends ApiRequestBase
{
    /**
     * @param PostageContract|array $postage
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