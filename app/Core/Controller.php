<?php

namespace App\Core;


class Controller {

	public $model;
	public $view;
	public $params;

	function __construct()
	{
		$this->view = new View();
	}

	function index()
	{
    echo "App\Core\Controller";
	}
}
