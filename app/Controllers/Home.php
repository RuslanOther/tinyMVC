<?php
namespace App\Controllers;

use App\Core\Controller;
use App\Models\Note as Note;

class Home extends Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->note = new Note();

  }

	public function index()
	{
		$this->view->render('main_view.php', 'template_view.php', $this->note->get_data());
	}
}
