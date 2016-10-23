<?php
//Should define color for all shapes on auto
abstract class Shape
{
	protected $color;

	public function __construct($color = "red") 
	{
		$this->color = $color;
	}

	public function get_color() 
	{
		return $this->color;
	}
	//requires a function called get_area be declared for all extended classes of shape
	//No {body} necessary
	abstract protected function get_area();
	
}

class Square extends Shape
{
	protected $length;

	public function get_area() 
	{
		pow($this->length, 2); 
	}
}

class Triangle extends Shape
{
	protected $base = 4;

	protected $height = 7;

	public function get_area() 
	{
		return .5 * $this->base * $this->height;
	}
}

class Circle extends Shape
{
	protected $radius = 5;

	public function get_area() 
	{
		return M_PI * pow($this->radius, 2);
	}
}

 $Circle = new Circle();
var_dump("Circles Area: " . $Circle->get_area());