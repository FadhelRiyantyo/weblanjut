<?php namespace App\Controllers;

class Helloworld extends BaseController {

	public function index($name, $npm)
	{
		//echo $this->name;
		echo $name . "<br>";
		echo $npm . "<br>";
		//echo "Hello Agnes";
	}
	public function show()
	{
		echo "Fadhel Riyantyo\n";
		echo "1817051065";
	}
}