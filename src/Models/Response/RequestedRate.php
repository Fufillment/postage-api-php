<?php


namespace Fulfillment\Postage\Models\Response;


class RequestedRate implements \Fulfillment\Postage\Models\Response\Contracts\RequestedRate
{
	/**
	 * @var string
	 */
	protected $referenceId;
	/**
	 * @var RatesResponse
	 */
	protected $rates;

	/**
	 * @var bool
	 */
	protected $success;

	/**
	 * @var string[]
	 */
	protected $messages;

	/**
	 * @return bool
	 */
	public function getSuccess()
	{
		return $this->success;
	}

	/**
	 * @param bool $success
	 */
	public function setSuccess($success)
	{
		$this->success = $success;
	}

	/**
	 * @return string[]
	 */
	public function getMessages()
	{
		return $this->messages;
	}

	/**
	 * @param string[] $messages
	 */
	public function setMessages($messages)
	{
		$this->messages = $messages;
	}

	/**
	 * @param string $message
	 */
	public function addMessage($message)
	{
		$this->messages[] = $message;
	}

	/**
	 * @return string
	 */
	public function getReferenceId()
	{
		return $this->referenceId;
	}

	/**
	 * @param string $referenceId
	 */
	public function setReferenceId($referenceId)
	{
		$this->referenceId = $referenceId;
	}

	/**
	 * @return RatesResponse
	 */
	public function getRates()
	{
		return $this->rates;
	}

	/**
	 * @param RatesResponse $rates
	 */
	public function setRates($rates)
	{
		$this->rates = $rates;
	}
}