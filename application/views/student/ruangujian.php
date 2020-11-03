<?php
$kehadiran = $_GET['kehadiran'];

$tabelsoal = 'soal_'.$_GET['mapel'];
$jenis_soal = $_GET['jenis_soal'];
//$kelas = $this->db->get_where($namatabel, ['kelas' => $kelas2])->result_array();
$this->db->order_by('id_soal', 'ASC');    
$soal = $this->db->get_where($tabelsoal, ['jenis_soal' => $jenis_soal])->result_array();

?>


<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
<div class="row row-cols-4">

    <div class="col-sm">
    <h4>Pilih <b>satu</b> jawaban yang paling tepat!</h4>
        <?php 
        $i = 1; 
        
        ?>
        <?php foreach ($soal as $s) : 
            $skor = 1; ?>
    
        <form action="<?= base_url('student/prosesujian');?>" method="get">
        <input type="hidden" name="id[]" value="<?php echo $s['id_soal']; ?>">
        
        
            <div class="form-group">
            No <?= $i; ?> <br>
                <label for="exampleFormControlTextarea1"><?= $s['soal']; ?></label>
            </div>
            <div class="row row-cols-4">
              <div class="col-sm">
                    <table class="table table-borderless">
                    <tr>
                    <td><input name="jawaban[]" type="checkbox" value="a">  <?= $s['jawaban_a']?></td>
                    </tr>
                    <tr>
                    
                    <td><input name="jawaban[]" type="checkbox" value="b">  <?= $s['jawaban_b']?></td>
                    </tr>
                    <tr>
                    
                    <td><input name="jawaban[]" type="checkbox" value="c">  <?= $s['jawaban_c']?></td>
                    </tr>
                    <tr>
                    
                    <td><input name="jawaban[]" type="checkbox" value="d">  <?= $s['jawaban_d']?></td>
                    </tr>
                    <tr>
                    
                    <td><input name="jawaban[]" type="checkbox" value="f">  Menyerah</td>
                    </tr>
                    <input type="hidden" name="matapelajaran" value="<?= $_GET['mapel']?>" >
                    <input type="hidden" name="jenis_soal" value="<?= $jenis_soal?>" >
                    </table>
                    
                </div>
            </div>
            
        <?php $i++; ?>
        <?php endforeach; ?>
        <button class="btn btn-primary" type="submit">Selesai</button>
        </form>

        </div>
    <div class="col-sm">
    <p> </p>
    </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content --> 