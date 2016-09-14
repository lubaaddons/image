<?php

namespace Luba;

use abeautifulsite\SimpleImage;

/**
 * @see abeautifulsite\SimpleImage
 * 
 */
class Image
{
	/**
	 * Work on an existing image
	 *
	 * @var string filename
	 * @return SimpleImage
	 */
	public static function make($filename)
	{
		return new SimpleImage($filename);
	}

	/**
	 * Create a brand new Image
	 *
	 * @param int width
	 * @param int $height
	 * @param hex string $color
	 */
	public static function create($width = NULL, $height = NULL, $color = NULL)
	{
		return new SimpleImage(NULL, $width, $height, $color);
	}
}