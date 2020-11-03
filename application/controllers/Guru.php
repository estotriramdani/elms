<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Guru extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    
    public function index()
    {
        $data['title'] = 'Teacher Side';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

       $this->load->view('templates/header', $data);
       $this->load->view('templates/sidebar', $data);
       $this->load->view('templates/topbar', $data);
       $this->load->view('guru/index', $data);
       $this->load->view('templates/footer');
    }

    public function exambuilder()
    {

        $data['title'] = 'Exam Builder';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

       $this->load->view('templates/header', $data);
       $this->load->view('templates/sidebar', $data);
       $this->load->view('templates/topbar', $data);
       $this->load->view('guru/exambuilder', $data);
       $this->load->view('templates/footer');

       
    }

    public function nilai()
    {
        $data['title'] = 'Daftar Nilai Siswa';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $_POST['kelas2'] = 0;

       $this->load->view('templates/header', $data);
       $this->load->view('templates/sidebar', $data);
       $this->load->view('templates/topbar', $data);
       $this->load->view('guru/nilai', $data);
       $this->load->view('templates/footer');
    }

    public function examaction()
    {
        $data['title'] = 'Daftar Nilai Siswa';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        

       $this->load->view('templates/header', $data);
       $this->load->view('templates/sidebar', $data);
       $this->load->view('templates/topbar', $data);
       $this->load->view('guru/examaction', $data);
       $this->load->view('templates/footer');
    }
    public function daftarsoal()
    {
        $data['title'] = 'Daftar Soal';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        
       $this->load->view('templates/header', $data);
       $this->load->view('templates/sidebar', $data);
       $this->load->view('templates/topbar', $data);
       $this->load->view('guru/daftarsoal', $data);
       $this->load->view('templates/footer');
    }
}