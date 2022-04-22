<?php

	class Vertex
	{
		private		$_x;
		private		$_y;
		private		$_z;
		private		$_w = 1.0;
		private		$_color;

		static		$verbose = False;

		public function __construct(array $array)
		{
			if (isset($array['x']) && isset($array['y']) && isset($array['z']))
			{
				$this->_x = floatval($array['x']);
				$this->_y = floatval($array['y']);
				$this->_z = floatval($array['z']);
			}
			if (isset($array['w']))
			{
				$this->_w = floatval($array['w']);
			}
			if (isset($array['color']))
			{
				$this->_color = $array['color'];
			}
			else
			{
				$this->_color = new Color( array( 'red' => 255, 'green' => 255, 'blue' => 255));
			}
			if (Self::$verbose)		//this guy is static so to access to it within the function need "self::"
			{
				printf("Vertex( x: %.2f, y: %.2f, z:%.2f, w:%.2f, Color( red: %3d, green: %3d, blue: %3d ) ) constructed.\n",
						$this->_x, $this->_y, $this->_z, $this->_w,
						$this->_color->red, $this->_color->green, $this->_color->blue);
			}
		}
		public function __destruct()
		{
			if (Self::$verbose)		//this guy is static so to access to it within the function need "self::"
			{
				printf("Vertex( x: %.2f, y: %.2f, z:%.2f, w:%.2f, Color( red: %3d, green: %3d, blue: %3d ) ) destructed.\n",
						$this->_x, $this->_y, $this->_z, $this->_w,
						$this->_color->red, $this->_color->green, $this->_color->blue);
			}
		}
		public function __toString()
		{
			if (Self::$verbose)
			{
				return (sprintf("Vertex( x: %.2f, y: %.2f, z:%.2f, w:%.2f, Color( red: %3d, green: %3d, blue: %3d ) )",
							$this->_x, $this->_y, $this->_z, $this->_w,
							$this->_color->red, $this->_color->green, $this->_color->blue));
			}
			else
				return (sprintf("Vertex( x: %.2f, y: %.2f, z:%.2f, w:%.2f )",
							$this->_x, $this->_y, $this->_z, $this->_w));

		}
		public function doc()
		{
			if (file_exists("./Vertex.doc.txt"))
			{
				$file = file_get_contents("./Vertex.doc.txt");
				return $file;
			}
		}
		public function getX()
		{
			return $this->_x;
		}
		public function getY()
		{
			return $this->_y;
		}
		public function getZ()
		{
			return $this->_z;
		}
		public function getW()
		{
			return $this->_w;
		}
		public function getColor()
		{
			return $this->_color;
		}

		public function setX($var)
		{
			$this->_x = $var;
		}
		public function setY($var)
		{
			$this->_y = $var;
		}
		public function setZ($var)
		{
			$this->_z = $var;
		}
		public function setW($var)
		{
			$this->_w = $var;
		}
		public function setColor($var)
		{
			$this->_color = $var;
		}
	}
?>