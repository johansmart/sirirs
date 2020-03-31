<?php
error_reporting(0);
$id = base64_decode($_GET["id"]);
$sqlku = mysqli_query($konek,"SELECT * FROM tbl_kunjungan WHERE kode='$id'");
$data  = mysqli_fetch_array($sqlku);
$datapulang=$data['kode_pulang'];
$icd=$data['kode_icd'];
?>
<div class="col-md-12">    
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">VIRIFIASI PASIEN PULANG</h3>
            </div>
               <form class="form-horizontal" method="POST" action="">
              <div class="box-body">
            <div class="modal-body">


              <div class="row">
        <div class="col-md-12">
          <div class="nav-tabs-custom">
            <div class="tab-content">
              <!-- Tab I -->
              <div class="tab-pane active" id="tab_1">
                <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">Tanggal Masuk</label>
                   <div class="col-sm-4">
                    <input type="date" class="form-control" id="uraian" disabled="disabled" value="<?php echo $data['tgl_masuk'];?>" onkeypress="return hanyaAngka(event)" placeholder="Tgl kunjungan" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                  </div>



                   <label for="inputEmail3" class="col-sm-2 control-label">Tanggal Keluar</label>
                   <div class="col-sm-4">
                    <input type="date" class="form-control" id="uraian" name="txttglpulang"  value="<?php echo $data['tgl_keluar'];?>" onkeypress="return hanyaAngka(event)" placeholder="Tgl kunjungan" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                  </div>


                </div>


               

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Perkembangan Rawatan</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" name="txtrawatan" placeholder="Perkembangan Rawat Inap"><?php echo $data['rawatan'];?></textarea>
                  </div>
                </div>





             

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">ICD X</label>
                  <div class="col-sm-10">
                    <select name="cbicd" class="form-control select2"  style="width: 100%;">
                      <?php
                        $qry = mysqli_query($konek,"SELECT * from tbl_icd"); 
                        while ($data=mysqli_fetch_array($qry)) 
                        {
                        ?>
                        <option class="form-control" value="<?php echo $data["kode"]; ?>" <?php 
                            if($icd==$data['kode']){echo "selected";} ?>><?php echo $data['uraian']; ?></option><?php
                        }
                      ?>
                    </select>
                  </div>
                </div>



                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Cara Pulang</label>
                  <div class="col-sm-10">
                    <select name="cbcarapulang" class="form-control select2"  style="width: 100%;">
                      <?php
                        $qry = mysqli_query($konek,"SELECT * from tbl_cara_pulang"); 
                        while ($data=mysqli_fetch_array($qry)) 
                        {
                        ?>
                        <option class="form-control" value="<?php echo $data["kode"]; ?>" <?php 
                            if($datapulang==$data['kode']){echo "selected";} ?>><?php echo $data['uraian']; ?></option><?php
                        }
                      ?>
                    </select>
                  </div>
                </div>



              


               



              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
              </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <input type="submit" name="btnedit" class="btn btn-primary pull-right" value="Pulangkan Pasien">
                    </div>
                  </div>
                </div>
              </div>
            </form>
   

     <?php
          if (isset($_POST["btnedit"])){
                                $txtkode =$_POST['txtkode'];
                                $cbcarapulang =$_POST['cbcarapulang'];
                                $txttglpulang =$_POST['txttglpulang'];
                                $txtrawatan =$_POST['txtrawatan'];
                                $cbicd =$_POST['cbicd'];


            $edit = mysqli_query($konek,"UPDATE  tbl_kunjungan SET kode_icd='$cbicd',rawatan='$txtrawatan',tgl_keluar='$txttglpulang',tgl_keluar='$txttglpulang',status='Pasien Pulang',kode_pulang='$cbcarapulang' WHERE kode='$id'");
            if ($edit) {  ?>
              <script type="text/javascript">
                document.location.href="beranda.php?page=pasien_lama";
              </script>
              </script>
              <?php
                  }else{
                    echo "<script>alert('Terjadi Kesalahan')</script>";
                    echo "<meta http-equiv='refresh' content='0; url=?page=pasien_lama'>";
                  }
                }
              ?>
          </div>
    </div>



