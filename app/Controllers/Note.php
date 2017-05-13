<?php
namespace App\Controllers;

use App\Core\Controller;
use App\Models\Note as NoteModel;

class Note extends Controller
{
  /**
   * [__construct description]
   */
  public function __construct()
  {
    parent::__construct();
    $this->note = new NoteModel();

  }
  /**
   * [get description]
   * @return [type] [description]
   */
	public function get()
	{
    $this->note->db->where("id", $this->params);
    // $user = $this->note->getOne();
    // var_dump($this->params);
    Route::redirect();
		$this->view->render('note_view.php', 'template_view.php', $this->note->db->getOne('note'));
	}

  public function save(){
    $data['title'] = $_POST['title'];
    $data['body'] = $_POST['body'];

    $note = new NoteModel();
    $note->set_data($data);

    $this->view->render('main_view.php', 'template_view.php', $this->note->get_data() );
  }
  public function update(){
    $data['title'] = $_POST['title'];
    $data['body'] = $_POST['body'];

    $note = new NoteModel();
    $note->db->where ('id', $_POST['id']);
    $note->db->update('note', $data);
    $this->view->render('main_view.php', 'template_view.php', $this->note->get_data() );
  }
}
