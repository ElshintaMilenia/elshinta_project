<?php namespace App\Controllers;

class Helloworld extends BaseController{
    public function index($name, $npm)
	{
        echo $this->name;
       // echo $name ."<br>";
       // echo $npm ."<br>";
		//echo "Hello Elshinta";
    }

    public function show()
    {
        echo "Elshinta Milenia";
        echo "1857051012";
    }
}