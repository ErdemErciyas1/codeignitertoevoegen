<?php

class Add_users extends CI_Model
{


		public function add($data)
		{

			$this->load->database();
			//de code hieronder laadt de database ''user''
			$count = $this->db->insert('birthdays', $data);
			if($count>0)
			{
				return true;
			}

			else
			{
				return false; 
			}
		}	

}


?>