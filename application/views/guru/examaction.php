<?php

$tabelsoal = "soal_".$user['mata_pelajaran'];


$data = [
    'soal' => $this->input->post('soal'),
    'jenis_soal' => $this->input->post('jenis_soal'),
    'jawaban_a' => $this->input->post('jawaban_a'),
    'jawaban_b' => $this->input->post('jawaban_b'),
    'jawaban_c' => $this->input->post('jawaban_c'),
    'jawaban_d' => $this->input->post('jawaban_d'),
    'kunci' => $this->input->post('kunci')
];

$this->db->insert($tabelsoal, $data);

$soal = $_GET['soal'];


$this->session->set_flashdata("message", "<div class=\"alert alert-success\" role=\"alert\">
Soal berhasil dibuat</div>");


redirect('guru/exambuilder');