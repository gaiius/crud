<?php
	class M_crud extends CI_Model {
		public function __construct() {
			$this->load->database();
		}

		function get_crud_all() {
			$query=$this->db->query("select * from mstappr ");
			return $query->result();
		}

		function tambah() {
			$data = array(
				'idMstAppr'=>$this->input->post('idMstAppr'),
				'MstAppr1' =>$this->input->post('MstAppr1'),
				'MstAppr2' =>$this->input->post('MstAppr2'),
				'MstAppr3' =>$this->input->post('MstAppr3'),
				'MstAppr4' =>$this->input->post('MstAppr4'),
				'idMstUser' =>$this->input->post('idMstUser')
			);
			return $this->db->insert('mstappr', $data);
		}

		function get_crud_edit($id) {
				$this->db->where('idMstAppr',$id);
				$query = $this->db->get('mstappr');
				if($query ->num_rows > 0)
			return $query;
			else
			return null;
		}

		function edit() {
			$id = $this->input->post('idMstAppr');
			$data = array (
			'idMstAppr'=>$this->input->post('idMstAppr'),
				'MstAppr1' =>$this->input->post('MstAppr1'),
				'MstAppr2' =>$this->input->post('MstAppr2'),
				'MstAppr3' =>$this->input->post('MstAppr3'),
				'MstAppr4' =>$this->input->post('MstAppr4'),
				'idMstUser' =>$this->input->post('idMstUser')
			);
			$this->db->where('idMstAppr',$id);
			$this->db->update('mstappr',$data);
		}

		function hapus_d($id){
			$this->db->where('idMstAppr',$id);
			$this->db->delete('mstappr');
		}
	
	}
?>
