<?php

	class Color
	{
		public		$red;
		public		$green;
		public		$blue;

		static		$verbose = False;

		public function __construct(array $color)
		{
			if (isset($color['red']) && isset($color['green']) && isset($color['blue']))
			{
				$this->red = intval($color['red']);
				$this->green = intval($color['green']);
				$this->blue = intval($color['blue']);
			}
			else if (array_key_exists('rgb', $color))
			{
				$this->red = intval($color['rgb']) >> 16 & 255;
				$this->green = intval($color['rgb']) >> 8 & 255;
				$this->blue = intval($color['rgb']) & 255;
			}
			if (Self::$verbose)		//this guy is static so to access to it within the function need "self::"
			{
				printf("Color( red: %3d, green: %3d, blue: %3d ) constructed.\n", $this->red, $this->green, $this->blue);
			}
		}
		public function __destruct()
		{
			if (Self::$verbose)		//this guy is static so to access to it within the function need "self::"
			{
				printf("Color( red: %3d, green: %3d, blue: %3d ) destructed.\n", $this->red, $this->green, $this->blue);
			}
		}
		public function __toString()
		{
			return (sprintf("Color( red: %3d, green: %3d, blue: %3d )", $this->red, $this->green, $this->blue));
		}
		public function doc()
		{
			if (file_exists("./Color.doc.txt"))
			{
				$file = file_get_contents("./Color.doc.txt");
				return $file;
			}
		}
		public function add($color)
		{
			$new = new Color( array(
				'red' => $this->red + $color->red,
				'green' => $this->green + $color->green,
				'blue' => $this->blue + $color->blue
			));
			return $new;
		}
		public function sub($color)
		{
			$new = new Color( array(
				'red' => $this->red - $color->red,
				'green' => $this->green - $color->green,
				'blue' => $this->blue - $color->blue
			));
			return $new;
		}
		public function mult($another_color)
		{
			$new = new Color( array(
				'red' => $this->red * $another_color,
				'green' => $this->green * $another_color,
				'blue' => $this->blue * $another_color
			));
			return $new;
		}
	}
?>