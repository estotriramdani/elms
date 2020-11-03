<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?> Mata Pelajaran <?= $user['mata_pelajaran']; ?></h1>

    <?php
    $mapel = $user['mata_pelajaran'];
    $namatabel = "soal_".$mapel;
    
    $jenis_soal = $_GET['jenis_soal2'];
    //$kelas = $this->db->get_where($namatabel, ['kelas' => $kelas2])->result_array();
    $this->db->order_by('id_soal', 'ASC');    
    $soal = $this->db->get_where($namatabel, ['jenis_soal' => $jenis_soal])->result_array();




    ?>
<a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#pilihKelas">Pilih Jenis Soal</a>

<div class="row row-cols-4">
    <div class="col-sm">
        <table class="table">
            <thead>
                <tr class="">
                    <th scope="col">Jenis Soal</th>
                    <th scope="col">Soal</th>
                    <th scope="col">Kunci</th>
                </tr>
            </thead>
            <tbody>
            <?php $i = 1; ?>
            <?php foreach ($soal as $s) : ?>
                <tr class="">
                    <td><?= $s['jenis_soal'];?></td>
                    <td><?= $s['soal']; ?></td>
                    <td><?= $s['kunci']; ?></td>
                </tr>
            <?php $i++; ?>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="col-sm-4">
    <p></p>
    </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content --> 

<!-- Modal -->
<div class="modal fade" id="pilihKelas" tabindex="-1" role="dialog" aria-labelledby="pilihKelasLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="pilihKelasLabel">Add New Role</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('guru/daftarsoal'); ?>" method="get">
                <div class="modal-body">
                    <div class="form-group">
                        <select class="form-control" name="jenis_soal2">
                        <option value="">Pilih kelas</option>
                        <?php $i = 1;
                        while( $i < 7){?>
                        <option name="jenis_soal2" value="Ulangan_Harian_<?= $i ?>">Ulangan Harian <?= $i ?></option>
                        <?php $i++;}?>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Selesai</button>
                </div>
            </form>
        </div>
    </div>
</div> 