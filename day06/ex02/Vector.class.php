<?php

	class Vector
	{
		private		$_x;
		private		$_y;
		private		$_z;
		private		$_w = 0.0;
		private		$_dest;
		private		$_orig;

		static		$verbose = False;

		public function __construct(array $array)
		{
			if ($array['dest'] instanceof Vertex && isset($array['dest']))
			{
				$this->_x = floatval($array['x']);
				$this->_y = floatval($array['y']);
				$this->_z = floatval($array['z']);
				$this->_w = floatval($array['w']);
				$this->_dest = floatval($array['dest']);
			}
			if (isset($array['orig']))
			{
				$this->_orig = floatval($array['orig']);
				$orig = new Vertex( array( 'x' => 0, 'y' => 0, 'z' => 0, 'w' => 1));
			}
			if (Self::$verbose)		//this guy is static so to access to it within the function need "self::"
			{
				printf("Vector( x: %.2f, y: %.2f, z:%.2f, w:%.2f ) constructed.\n",
						$this->_x, $this->_y, $this->_z, $this->_w);
			}
		}
		public function __destruct()
		{
			if (Self::$verbose)		//this guy is static so to access to it within the function need "self::"
			{
				printf("Vector( x: %.2f, y: %.2f, z:%.2f, w:%.2f ) destructed.\n",
						$this->_x, $this->_y, $this->_z, $this->_w);
			}
		}
		public function __toString()
		{
			if (Self::$verbose)
			{
				return (sprintf("Vector( x: %.2f, y: %.2f, z:%.2f, w:%.2f )",
							$this->_x, $this->_y, $this->_z, $this->_w));
			}
			else
				return (sprintf("Vector( x: %.2f, y: %.2f, z:%.2f, w:%.2f )",
							$this->_x, $this->_y, $this->_z, $this->_w));

		}
		public function doc()
		{
			if (file_exists("./Vector.doc.txt"))
			{
				$file = file_get_contents("./Vector.doc.txt");
				return $file;
			}
		}
		public function add($color)
		{
			$new = new Vector( array(
				'red' => $this->red + $color->red,
				'green' => $this->green + $color->green,
				'blue' => $this->blue + $color->blue
			));
			return $new;
		}
		public function sub($color)
		{
			$new = new Vector( array(
				'red' => $this->red - $color->red,
				'green' => $this->green - $color->green,
				'blue' => $this->blue - $color->blue
			));
			return $new;
		}
	}
?>