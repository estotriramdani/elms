<?php

$fisika = $this->db->get_where('nilai_Fisika', array('email'=>$user['email']))->row_array();
$kimia = $this->db->get_where('nilai_Kimia', array('email'=>$user['email']))->row_array();

$kehadiranfisika = $this->db->get_where('kehadiran_ujian_Fisika', array('email'=>$user['email']))->row_array();
$kehadirankimia = $this->db->get_where('kehadiran_ujian_Kimia', array('email'=>$user['email']))->row_array();

?>
<div class="row ">
  <div class="">
    <!-- Begin Page Content FISIKA-->
            <div class="container-fluid">
              <div class="card shadow mb-4">
                <!-- Card Header - Accordion -->
                <a href="#fisika" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="fisika">
                  <h6 class="m-0 font-weight-bold text-primary">Fisika</h6>
                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse show" id="fisika">
                  <div class="card-body">
                    <div class="row">
                        <form action="<?= base_url('student/ruangujian'); ?>"  method="get">
                            <div class="form-group">
                                <label >Mata Pelajaran</label>
                                <select  name="mapel" id="mapel" class="form-control" id="exampleFormControlSelect1">
                                <option value="Fisika">Fisika</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label >Jenis Ujian</label>
                                <select  name="jenis_soal" id="jenis_soal" class="form-control" id="exampleFormControlSelect1">
                                

                                <option value="">Pilih Jenis Ujian</option>
                                <?php $i = 1; 
                                while ($i < 7){?>

                                <option value="ulangan_harian_<?=$i?>" <?php if($kehadiranfisika['ulangan_harian_'.$i] == 1) echo"disabled";?>>Ulangan Harian <?=$i?><?php if($kehadiranfisika['ulangan_harian_'.$i] == 1) echo" telah diikuti";?></option>
                               

                                <?php $i++; }?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label >Kehadiran</label>
                                <select  name="kehadiran" id="kehadiran" class="form-control" id="exampleFormControlSelect1">
                                <option value="1">Hadir</option>
                                </select>
                            </div>
                            
                            <button type="submit"  class="btn btn-primary">
                                Masuk
                            </button>
                        </form>
                    </div>
                  </div>
                </div>
              </div>
              </div>
  </div>
  <div class="col-sm">
   <!-- Begin Page Content Kimia-->
   <div class="container-fluid row">
              <div class="card shadow mb-4">
                <!-- Card Header - Accordion -->
                <a href="#kimia" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="kimia">
                  <h6 class="m-0 font-weight-bold text-primary">Kimia</h6>
                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse show" id="kimia">
                  <div class="card-body">
                    <div class="row">
                        <form action="<?= base_url('student/ruangujian'); ?>" method="get">
                            <div class="form-group">
                                <label >Mata Pelajaran</label>
                                <select  name="mapel" id="mapel" class="form-control" id="exampleFormControlSelect1">
                                <option value="Kimia">Kimia</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label >Jenis Ujian</label>
                                <select  name="jenis_soal" id="jenis_soal" class="form-control" id="exampleFormControlSelect1">
                                <option value="">Pilih Jenis Ujian</option>
                                <?php $i = 1; 
                                while ($i < 7){?>
                                <option value="ulangan_harian_<?=$i?>" <?php if($kehadirankimia['ulangan_harian_'.$i] == 1) echo"disabled";?>>Ulangan Harian <?=$i?><?php if($kehadirankimia['ulangan_harian_'.$i] == 1) echo" telah diikuti";?></option>
                                <?php $i++; }?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label >Kehadiran</label>
                                <select  name="kehadiran" id="kehadiran" class="form-control" id="exampleFormControlSelect1">
                                <option value="1">Hadir</option>
                                </select>
                            </div>
                            
                            <button type="submit"  class="btn btn-primary">
                                Masuk
                            </button>
                        </form>
                    </div>
                  </div>
                </div>
              </div>
              </div>
  </div>
</div>
