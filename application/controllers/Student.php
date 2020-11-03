<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Student extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Teacher Side';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('student/index', $data);
        $this->load->view('templates/footer');
    }

    public function exam()
    {
        $data['title'] = 'Mulai Ujian';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('student/exam', $data);
        $this->load->view('templates/footer');
    }

    public function ruangujian()
    {
        $data['title'] = 'Ruang Ujian';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('student/ruangujian', $data);
        $this->load->view('templates/footer');
    }

    public function prosesujian()
    {
        $data['title'] = 'Hasil Ujian';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('student/prosesujian', $data);
        $this->load->view('templates/footer');
    }
    
}