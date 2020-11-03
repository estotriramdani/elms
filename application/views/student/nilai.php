

<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Daftar Nilai <?= $user['name']; ?></h1>
  <p>Jika belum mengikuti ujian, nilai diset otomatis menjadi 0 (nol).</p>
  <h1><?= $user['kelas']; ?></h1>
</div>

    <?php 
      $this->load->view('student/nilai/nilaifisika');
      $this->load->view('student//nilai/nilaikimia');
    
    ?>


    

  </div>

</div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->