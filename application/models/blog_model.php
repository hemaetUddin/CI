<?php
	/**
	* 
	*/
	class Blog_model extends CI_Model
	{
		
		function getAll()
		{
			$q = $this->db->get('student');

			if($q->num_rows()>0){
				foreach ($q->result() as $row) {
					// echo $row->Name;
					$data[]=$row;
				}
			return $data;
		}

		}
	}


?>