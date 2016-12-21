<?php
namespace App\Controllers;

use App\Core\Controller;
use App\Models\Note as Note;

class Home extends Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->model = new Note();
  }

	public function index()
	{
		$this->view->render('main_view.php', 'template_view.php', $this->model->get_notes() );
	}

  public function set_data(){

    $data['title'] = $_POST['title'];
    $data['body'] = $_POST['body'];

    $this->model->set_data($data);


  }
}
