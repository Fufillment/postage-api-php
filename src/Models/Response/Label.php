<?php


namespace Fulfillment\Postage\Models\Response;


use Fulfillment\Postage\Models\Response\Contracts\Label as LabelContract;
use Fulfillment\Postage\Models\Traits\SimpleSerializable;

class Label implements LabelContract, \JsonSerializable
{
	use SimpleSerializable;

	protected $id;
	protected $imageType;
	protected $s3FilePath;

	/**
	 * @return int
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * @param int $id
	 */
	public function setId($id)
	{
		$this->id = $id;
	}

	/**
	 * @param string $type
	 */
	public function setImageType($type)
	{
		$this->imageType = $type;
	}

	/**
	 * @return string
	 */
	public function getImageType()
	{
		return $this->imageType;
	}

	/**
	 * @param string $path
	 */
	public function setS3FilePath($path)
	{
		$this->s3FilePath = $path;
	}

	/**
	 * @return string
	 */
	public function getS3FilePath()
	{
		return $this->s3FilePath;
	}
}