<?php
namespace App\Models;

use App\Core\Model;

class Note extends Model
{
	public function set_data($data)
	{
		$id = $this->db->insert ('note', $data);

		return $id;
	}

	public function get_notes()
	{
		return $this->db->get('note');
	}
}
