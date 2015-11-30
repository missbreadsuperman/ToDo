<?php
namespace App\Http\Controllers;

class HomeController extends Controller{
	public function getIndex()
	{
		return View::make('index');
	}
}
?>
