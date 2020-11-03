<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


<?php $mata_pelajaran = $_GET['matapelajaran']; 
$namatabel = 'soal_'.$mata_pelajaran;
$jenis_soal = $_GET['jenis_soal'];

$this->db->order_by('id_soal', 'ASC');    
$kunci = $this->db->get_where($namatabel, ['jenis_soal' => $jenis_soal])->result_array();
$jawaban = $_GET['jawaban'];
    
$tabelnilai = "nilai_".$mata_pelajaran."_harian";
$tabelnilai2 = $this->db->get_where($tabelnilai, ['email' => $user['email']])->result_array();

?>

<?php $i = 1; ?>
<?php foreach ($kunci as $k) : ?>
<?php $kunjaw[] = $k['kunci'];?>
<?php $i++; ?>
<?php endforeach;?>

<?php

if (count($kunjaw) == count($jawaban)){
    $no = 0;
    $skor = 0;
    while($no < (count($jawaban))){
        if($kunjaw[$no] == $jawaban[$no]){
            $skor++;}
        $no++;
    }
    $this->db->set($jenis_soal, '1');
    $this->db->where('email', $user['email']);
    $updatekehadiran = $this->db->update('kehadiran_ujian_'.$mata_pelajaran);
    $nilai = number_format($skor*100/count($jawaban), 2, '.', '')
    ?>
    <div class="row row-cols-4">
        <div class="col-sm">
            <div class="alert alert-primary" role="alert">
                Nilai Anda dalam <?= $jenis_soal; echo " $mata_pelajaran"; ?> adalah <?= $nilai; ?>
            </div>
       </div>
    <div class="col-sm">
        <p><a class="btn btn-primary" href="<?= base_url('student/exam')?>">Ke Halaman Utama</a></p>
    </div>
    </div>
<script type="text/javascript"> 
history.pushState(null, null, location.href);
    window.onpopstate = function () {
        history.go(1);
    };
</script> 
    <?php 
    $this->db->set($jenis_soal, number_format($nilai, 2, '.', ''));
    $this->db->where('email', $user['email']);
    $updatenilai = $this->db->update('nilai_'.$mata_pelajaran.'_harian');

} else {
    ?> 
    <div class="row row-cols-4">
        <div class="col-sm">
            <div class="alert alert-warning" role="alert">
            Anda belum mengisi semua soal atau terdapat soal dengan jawaban ganda. Silakan ulangi kembali.
            </div>
       </div>
        <div class="col-sm">
            <p><a class="btn btn-warning" href="<?= base_url('student/exam')?>">Ulangi</a></p>
        </div>
    </div>
    <?php
}

?>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content --> 



<script type="text/javascript"> 
history.pushState(null, null, location.href);
    window.onpopstate = function () {
        history.go(1);
    };
</script> 