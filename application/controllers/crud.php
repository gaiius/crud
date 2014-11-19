<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Crud extends CI_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->model('m_crud');
		}

		public function index() {
			$this->load->model('m_crud');
			$data['judul'] = 'Data siswa';
			$data['daftar'] = $this->m_crud->get_crud_all();
			$this->load->view('daftar_siswa', $data);
		}

		public function tambah() {
			$data['judul'] = 'Data siswa [+ADD]';
			$this->load->view('tambah.php', $data);
		}

		public function proses_tambah() {
			$this->load->model('m_crud','',TRUE);
			$this->m_crud->tambah();
			redirect('crud/index');
		}

		public function edit($id) {
			$data['judul'] = 'Data siswa [Edit]';
			$data['daftar'] = $this->m_crud->get_crud_edit($id);
			$this->load->view('edit',$data);
		}

		public function proses_edit() {
			$this->load->model('m_crud','',TRUE);
			$this->m_crud->edit();
			redirect('crud/index');
		}

		public function hapus($id) {
			$this->load->model('m_crud','',TRUE);
			$this->m_crud->hapus_d($id);
			redirect('crud/index');
		}
	}
?>
