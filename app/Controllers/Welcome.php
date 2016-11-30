<?php
namespace App\Controllers;

use App\Core\Controller;
use App\Core\Model;

class Welcome extends Controller
{
  function __construct($value)
  {
    parent::__construct();
    $this->model = new Model();
  }

	function index()
	{
    $client = new \GuzzleHttp\Client();
    $res = $client->request('GET', 'https://vk.com');
    // echo $res->getStatusCode();

    // echo $res->getHeaderLine('content-type');

    var_dump($res->getBody()) ;

		$this->view->render('main_view.php', 'template_view.php', $this->model->get_data());
	}
}
