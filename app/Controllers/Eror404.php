<?php
namespace App\Controllers;

use App\Core\Controller;

class Eror404 extends Controller
{

	function action_index()
	{
		$this->view->generate('404_view.php', 'template_view.php');
	}

}
