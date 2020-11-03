<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <?php $role_id = $this->session->userdata('role_id'); 
        switch ($role_id){
            case "1":
                $status = "Admin";
            break;
            case "4":
                $status = "Guru";
            break;
            default:
                $status = "Siswa";

        }
    ?>

    <h2>       
        Selamat datang <b><?= $user['name']; ?> </b> <?php if ($role_id == 5) echo " dari Kelas <b>$user[kelas] </b>";?>
    </h2>
    <p class="mb-3">
    Anda dikenali sebagai <b><?= $status ?></b> <?php if ($role_id == 4) echo "mengajar mata pelajaran <b>". $user['mata_pelajaran']."</b>";?>
    </p>
    <div class="row">
        <div class="col-lg-8">
            <?= $this->session->flashdata('message'); ?>
        </div>
    </div>

<?php

switch ($role_id){
    case "4":
        $this->load->view('guru/index');
    break;
    case "5":
        $this->load->view('student/nilai');
    break;
    default:
        echo "Anda Admin";

}

?>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content --> 