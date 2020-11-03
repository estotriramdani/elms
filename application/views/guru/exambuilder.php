<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    


<div class="row row-cols-4">
    <div class="col-sm">
    <?= $this->session->flashdata('message'); ?>
        <form action="<?= base_url('guru/examaction'); ?>" method="post">
            <div class="form-group">
                <label for="exampleFormControlInput1">Mata Pelajaran</label>
                <input type="text" class="form-control" id="mata_pelajaran" 
                name="mata_pelajaran" value="<?= $user['mata_pelajaran']; ?>" disabled>
                <small>Terisi otomatis sesuai mata pelajaran yang Anda ajar.</small>
            </div>
            <div class="form-group">
                <label >Jenis Soal</label>
                <select  name="jenis_soal" id="jenis_soal" class="form-control" id="exampleFormControlSelect1" required>
                <option value="">Pilih Jenis Soal</option>
                <option value="ulangan_harian_1" required>Ulangan Harian 1</option>
                <option value="ulangan_harian_2" required>Ulangan Harian 2</option>
                <option value="ulangan_harian_3" required>Ulangan Harian 3</option>
                <option value="ulangan_harian_4" required>Ulangan Harian 4</option>
                <option value="ulangan_harian_5" required>Ulangan Harian 5</option>
                <option value="ulangan_harian_6" required>Ulangan Harian 6</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Soal</label>
                <textarea class="form-control" id="soal" name="soal" rows="3" required></textarea>
            </div>
            <div class="row row-cols-5">
                <div class="form-group col-sm">
                    <label for="exampleFormControlInput1">Jawaban Opsi A</label>
                    <input required type="text" class="form-control" id="jawaban_a" name="jawaban_a" placeholder="Tulis opsi jawaban pertama">
                </div>
                <div class="form-group col-sm">
                    <label for="exampleFormControlInput1">Jawaban Opsi B</label>
                    <input required type="text" class="form-control" id="jawaban_b" name="jawaban_b" placeholder="Tulis opsi jawaban kedua">
                </div>
                <div class="form-group col-sm">
                    <label for="exampleFormControlInput1">Jawaban Opsi C</label>
                    <input required type="text" class="form-control" id="jawaban_c" name="jawaban_c" placeholder="Tulis opsi jawaban ketiga">
                </div>
                <div class="form-group col-sm">
                    <label for="exampleFormControlInput1">Jawaban Opsi D</label>
                    <input required type="text" class="form-control" id="jawaban_d" name="jawaban_d" placeholder="Tulis opsi jawaban keempat">
                </div>
            </div>
            <div class="form-group">
                    <label for="exampleFormControlInput1">Kunci Jawaban</label>
                    <input required type="text" class="form-control" id="kunci" name="kunci" placeholder="Contoh: a">
                    <small>Mohon tulis dalam huruf kecil (lowercase)</small>
            </div>
            <button type="submit"  class="btn btn-primary">
                Buat Soal
            </button>
        </form>
    </div>
    <div class="col-sm-1">
    <p class="mt-3">Halo <?= $user['name']; ?>! Anda sedang membuat soal mata pelajaran <?= $user['mata_pelajaran']; ?></p>
    <div>
</div>











        </div>
    </div>
            

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content --> 