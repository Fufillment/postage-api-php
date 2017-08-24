<?php


namespace Fulfillment\Postage\Models\Response\Contracts;


interface Label
{
	/**
	 * @return int
	 */
	public function getId();

	/**
	 * @param int $id
	 */
	public function setId($id);

	/**
	 * @param string $type
	 */
	public function setImageType($type);

	/**
	 * @return string
	 */
	public function getImageType();

	/**
	 * @param string $path
	 */
	public function setS3FilePath($path);

	/**
	 * @return string
	 */
	public function getS3FilePath();
}