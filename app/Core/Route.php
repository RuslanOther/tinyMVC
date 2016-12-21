<?php

namespace App\Core;

class Route
{

	protected $controller = 'Home';
	protected $action = 'index';
	protected $variables = array();

	public function start()
	{

		$routes = explode('/', $_SERVER['REQUEST_URI']);

		if ( !empty($routes) ) {
			foreach ($routes as $key => $value) {
				switch ($key) {
					case '0':
						break;
					case '1':
						if (!empty($routes[1])) {
							$this->controller = $routes[1];
						}
						break;
					case '2':
						if (!empty($routes[2])) {
							$this->action = $routes[2];
						}
						break;
					default:
						$this->variables[]= $value;
						break;
				}
			}
		}

		$this->controller = ucfirst($this->controller);
		$this->controller = 'App\Controllers\\' . $this->controller;

		echo $this->controller . '</br>';
		echo $this->action. '</br>';
		var_dump($this->variables);

		if (class_exists($this->controller))
		{
			$controller = new $this->controller($value);
			$action =	$this->action;

			if(method_exists($controller, $action))
			{
				$controller->$action();
			}
			else
			{
				$this->Error404();
			}
		}
		else
		{
				$this->Error404();
		}
	}

	public function Error404()
	{
		$response = new View;
		$response->render('404_view.php', 'template_view.php');
  }
}
