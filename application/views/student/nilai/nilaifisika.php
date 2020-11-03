<?php

$fisika = $this->db->get_where('nilai_Fisika', array('email'=>$user['email']))->row_array();
$kimia = $this->db->get_where('nilai_Kimia', array('email'=>$user['email']))->row_array();

?>

        <!-- Begin Page Content FISIKA-->
            <div class="container-fluid">
              <div class="card shadow mb-4">
                <!-- Card Header - Accordion -->
                <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                  <h6 class="m-0 font-weight-bold text-primary">Nilai Fisika</h6>
                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse hide" id="collapseCardExample">
                  <div class="card-body">
                    <div class="row">

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                      <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                          <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Nilai</div>
                              <div class="h5 mb-0 font-weight-bold text-gray-800">UTS</div>
                            </div>
                            <div class="col-auto">
                              <h2><?= $fisika['uts'];?></h2>
                            </h2></div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-xl-3 col-md-6 mb-4">
                      <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                          <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Nilai</div>
                              <div class="h5 mb-0 font-weight-bold text-gray-800">UAS</div>
                            </div>
                            <div class="col-auto">
                              <h2><?= $fisika['uas'];?></h2>
                            </h2></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                        <?php

                            $fisika_harian = $this->db->get_where('nilai_Fisika_harian', array('email'=>$user['email']))->row_array();
                            $i = 1;
                            $x = 0;
                            while ($i != 7){

                          
                        ?>
                          <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                              <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                  <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Nilai</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">Ulangan Harian ke <?php echo $i; ?></div>
                                  </div>
                                  <div class="col-auto">
                                    <h2><?= $fisika_harian['ulangan_harian_'.$i];?></h2>
                                  </h2></div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <?php

                          $i++;
                            }
                          
                          ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              </div>
   