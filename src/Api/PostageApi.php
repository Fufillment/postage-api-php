<?php

namespace Fulfillment\Postage\Api;

use Fulfillment\Postage\Models\Request\Contracts\Postage as PostageContract;
use Fulfillment\Postage\Exceptions\ClientValidationException;
use Fulfillment\Postage\Models\Response\Contracts\Postage;
use Fulfillment\Postage\Models\Response\Postage as ResponsePostage;
use GuzzleHttp\Exception\RequestException;

class PostageApi extends ApiRequestBase {

	/**
	 * @param PostageContract|array $postage
	 * @param bool|true             $validateRequest
	 * @param array|null            $queryString
	 *
	 * @return array|ResponsePostage
	 *
	 * @throws ClientValidationException
	 * @throws \Fulfillment\Postage\Exceptions\PostageException|null
	 * @throws \JsonMapper_Exception
	 */
	public function postageCreate($postage, $validateRequest = true, $queryString = null)
	{
		$this->tryValidation($postage, $validateRequest);
		$queryString = $this->addDebugParam($queryString);

		try
		{
			$json = $this->apiClient->post('postage', $postage, $queryString);
		}
		catch (RequestException $e)
		{
			throw $e;
		}

		return ($this->jsonOnly ? $json : $this->jsonMapper->map($json, new ResponsePostage()));
	}

	/**
	 * Void a Postage
	 *
	 * @param int|ResponsePostage $postage Either the Id of the object or the Postage object itself that should be voided
	 * @param array|null          $queryString
	 *
	 * @return object|string
	 */
	public function postageVoid($postage, $queryString = null)
	{
		$id          = $this->getPostageId($postage);
		$queryString = $this->addDebugParam($queryString);

		try
		{
			$json = $this->apiClient->delete("postage/$id", $queryString);
		}
		catch (RequestException $e)
		{
			throw $e;
		}

		return $json;
	}

	/**
	 * Get a Postage object
	 *
	 * @param int|ResponsePostage $postage Either the Id of the object or the Postage object itself to get
	 * @param array|null          $queryString
	 *
	 * @return array|ResponsePostage
	 */
	public function postageGet($postage, $queryString = null)
	{
		$id          = $this->getPostageId($postage);
		$queryString = $this->addDebugParam($queryString);

		try
		{
			$json = $this->apiClient->get("postage/$id", $queryString);
		}
		catch (RequestException $e)
		{
			throw $e;
		}


		return ($this->jsonOnly ? $json : $this->jsonMapper->map($json, new ResponsePostage()));
	}

	/**
	 * @param int|ResponsePostage $postage      Either the Id of the object or the Postage object
	 * @param string              $documentType The label document to use for the label
	 * @param string              $destination  Where the label should be printed to. Default is to only return the generated label
	 * @param string|null         $output       The output that should be provided (eg Generic.Postscript)
	 * @param string|null         $stock        The stock that should be provided (eg Landscape)
	 * @param array|null          $queryString
	 *
	 * @return mixed
	 * @throws \Exception
	 */
	public function postageLabelGet($postage, $documentType, $destination = 'response', $output = null, $stock = null, $queryString = null)
	{
		if (is_null($documentType))
		{
			throw new \Exception('Must specify a document type');
		}
		elseif (!is_string($documentType))
		{
			throw new \Exception('Document type must be a string');
		}
		$id = $this->getPostageId($postage);

		$queryBuilder = [
			'documentId'           => $documentType,
			'destinationId'        => $destination,
			'output'               => $output,
			'stock'                => $stock,
			'XDEBUG_SESSION_START' => 'postage',
		];
		$queryString = (is_array($queryString)) ? $queryString : [];
		$queryString = array_merge($queryString, $queryBuilder);

		$response = $this->apiClient->get("postage/$id/label", $queryString);

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
		if (is_int($postage))
		{
			$id = $postage;
		}
		elseif ($postage instanceof Postage)
		{
			$id = $postage->getId();
		}

		return $id;
	}

	/**
	 * Adds the the postage param to XDEBUG for easy pass through from one API request to another
	 *
	 * @param $queryString
	 *
	 * @return array
	 */
	private function addDebugParam($queryString)
	{
		if (!isset($queryString['XDEBUG_SESSION_START']))
		{
			$queryString['XDEBUG_SESSION_START'] = 'postage';
		}

		return $queryString;
	}
}
