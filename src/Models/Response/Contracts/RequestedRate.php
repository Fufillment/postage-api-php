<?php

namespace Fulfillment\Postage\Models\Response\Contracts;

use Fulfillment\Postage\Models\Response\RatesResponse;

interface RequestedRate
{
	/**
	 * @return string
	 */
	public function getReferenceId();

	/**
	 * @param string $referenceId
	 */
	public function setReferenceId($referenceId);

	/**
	 * @return RatesResponse
	 */
	public function getRates();

	/**
	 * @param RatesResponse $rates
	 */
	public function setRates($rates);

	/**
	 * @param bool $success
	 */
	public function setSuccess($success);

	/**
	 * @return bool
	 */
	public function getSuccess();

	/**
	 * @param string[]|null $messages
	 */
	public function setMessages($messages);

	/**
	 * @return string[]|null
	 */
	public function getMessages();

	/**
	 * @param string $message
	 */
	public function addMessage($message);
}