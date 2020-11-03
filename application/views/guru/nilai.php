<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?> Mata Pelajaran <?= $user['mata_pelajaran']; ?></h1>

    <?php
    $mapel = $user['mata_pelajaran'];
    $namatabel = "nilai_".$mapel."_harian";
    
    $kelas2 = $_GET['kelas2'];
    //$kelas = $this->db->get_where($namatabel, ['kelas' => $kelas2])->result_array();
    $this->db->order_by('nama', 'ASC');    
    $kelas = $this->db->get_where($namatabel, ['kelas' => $kelas2])->result_array();




    ?>
<a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#pilihKelas">Pilih Kelas</a>

<div class="row row-cols-4">
    <div class="col-sm">
        <table class="table">
            <thead>
                <tr class="text-center">
                    <th scope="col">No</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Nama</th>
                    <th scope="col">UH 1</th>
                    <th scope="col">UH 2</th>
                    <th scope="col">UH 3</th>
                    <th scope="col">UH 4</th>
                    <th scope="col">UH 5</th>
                    <th scope="col">UH 6</th>
                    <th scope="col">Rataan</th>
                </tr>
            </thead>
            <tbody>
            <?php $i = 1; ?>
            <?php foreach ($kelas as $k) : ?>
                <tr class="text-center">
                    <td><?= $i; ?></td>
                    <td><?= $k['kelas']; ?></td>
                    <td><?= $k['nama']; ?></td>
                    <td><?= $k['ulangan_harian_1']; ?></td>
                    <td><?= $k['ulangan_harian_2']; ?></td>
                    <td><?= $k['ulangan_harian_3']; ?></td>
                    <td><?= $k['ulangan_harian_4']; ?></td>
                    <td><?= $k['ulangan_harian_5']; ?></td>
                    <td><?= $k['ulangan_harian_6']; ?></td>
                    <td>
                        <?php 
                            $rataan = ($k['ulangan_harian_1']+$k['ulangan_harian_2']+$k['ulangan_harian_3']+
                            $k['ulangan_harian_4']+$k['ulangan_harian_5']+$k['ulangan_harian_6'])/6;
                            echo number_format($rataan, 2, '.', '');;
                        ?>
                    </td>
                    
                </tr>
            <?php $i++; ?>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="col-sm-4">
    <p><strong>Perhatian</strong></p>
    <p>Untuk membuka halaman rekap nilai, disarankan membukanya di perangkat desktop (komputer atau laptop) </p>
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
            <form action="<?= base_url('guru/nilai'); ?>" method="get">
                <div class="modal-body">
                    <div class="form-group">
                        <select class="form-control" name="kelas2">
                        <option value="">Pilih kelas</option>
                        <option>------ Kelas X ------</option>
                        <?php $i = 1;
                        while( $i < 7){?>
                        <option name="kelas2" value="X MIPA <?= $i ?>">X MIPA <?= $i ?></option>
                        <?php $i++;}?>
                        <option>------ Kelas XI ------</option>
                        <?php $i = 1;
                        while( $i < 7){?>
                        <option name="kelas2" value="XI MIPA <?= $i ?>">XI MIPA <?= $i ?></option>
                        <?php $i++;}?>
                        <option>------ Kelas XII ------</option>
                        <?php $i = 1;
                        while( $i < 7){?>
                        <option name="kelas2" value="XII MIPA <?= $i ?>">XII MIPA <?= $i ?></option>
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