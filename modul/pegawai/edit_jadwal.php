<?php
error_reporting(0);
$id = base64_decode($_GET["id"]);
$sqlku = mysqli_query($konek,"SELECT * FROM tbl_pegawai WHERE kode='$id'");
$data  = mysqli_fetch_array($sqlku);

$spesialis=$data['kode_spesialis'];
?>
<div class="col-md-12">    
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">JADWAL DOKTER</h3>
            </div>
               <form class="form-horizontal" method="POST" action="">
              <div class="box-body">
            <div class="modal-body">


              <div class="row">
        <div class="col-md-12">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">DOKTER</a></li>
              <!-- <li><a href="#tab_2" data-toggle="tab">HALAMAN II</a></li>
              <li><a href="#tab_3" data-toggle="tab">LANGKAH III</a></li> -->
              <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-users"></i></a></li>
            </ul>
            <div class="tab-content">
              <!-- Tab I -->
              <div class="tab-pane active" id="tab_1">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">NIP DOKTER / SIP</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" id="uraian" name="txtnip" disabled="disabled" value="<?php echo $data['nip'];?>" onkeypress="return hanyaAngka(event)" placeholder="NIDN Dosen" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">NAMA DOKTER</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="uraian" name="txtnama" disabled="disabled" value="<?php echo $data['nama'];?>" placeholder="Nama Lengkap Dosen" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                  </div>
                </div>

               




                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">SENIN</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="uraian" name="txtsenin" value="<?php echo $data['hari_senin'];?>" placeholder="Hari Senin" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                  </div>
                </div>


                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">SELASA</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="uraian" name="txtselasa" value="<?php echo $data['hari_selasa'];?>" placeholder="Hari Selasa" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                  </div>
                </div>


                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">RABU</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="uraian" name="txtrabu" value="<?php echo $data['hari_rabu'];?>" placeholder="Hari Rabu" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                  </div>
                </div>


                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">KAMIS</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="uraian" name="txtkamis" value="<?php echo $data['hari_kamis'];?>" placeholder="Hari Kamis" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                  </div>
                </div>



                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">JUMAT</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="uraian" name="txtjumat" value="<?php echo $data['hari_jumat'];?>" placeholder="Hari Jumat" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                  </div>
                </div>


                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">SABTU</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="uraian" name="txtsabtu" value="<?php echo $data['hari_sabtu'];?>" placeholder="Hari Sabtu" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                  </div>
                </div>

            
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">MINGGU</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="uraian" name="txtminggu" value="<?php echo $data['hari_minggu'];?>" placeholder="Hari Minggu" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                  </div>
                </div>
          
                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Spesialis</label>
                  <div class="col-sm-10">
                    <select name="cbspesialis" class="form-control select2" disabled="disabled" style="width: 100%;">
                      <?php
                        $qry = mysqli_query($konek,"SELECT * from tbl_spesialis"); 
                        while ($data=mysqli_fetch_array($qry)) 
                        {
                        ?>
                        <option class="form-control" value="<?php echo $data["kode"]; ?>" <?php 
                            if($spesialis==$data['kode']){echo "selected";} ?>> <?php echo $data['uraian']; ?></option><?php
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
                        <input type="submit" name="btnedit" class="btn btn-primary pull-right" value="Update">
                    </div>
                  </div>
                </div>
              </div>
            </form>
    <?php
          if (isset($_POST["btnedit"])){
                                $txtsenin =$_POST['txtsenin'];
                                $txtselasa =$_POST['txtselasa'];
                                $txtrabu =$_POST['txtrabu'];
                                $txtkamis =$_POST['txtkamis'];
                                $txtjumat =$_POST['txtjumat'];
                                $txtsabtu =$_POST['txtsabtu'];
                                $txtminggu =$_POST['txtminggu'];
                                $tgl_update = date("Y-m-d H:i:s"); 
            $edit = mysqli_query($konek,"UPDATE  tbl_pegawai SET hari_senin='$txtsenin',hari_selasa='$txtselasa',hari_rabu='$txtrabu',hari_kamis='$txtkamis',hari_jumat='$txtjumat',hari_sabtu='$txtsabtu',hari_minggu='$txtminggu',tgl_update='$tgl_update' WHERE kode='$id'");
            if ($edit) {  ?>
              <script type="text/javascript">
                document.location.href="beranda.php?page=filter_dokter";
              </script>
              </script>
              <?php
                  }else{
                    echo "<script>alert('Terjadi Kesalahan Inputan. Harap Coba Lagi')</script>";
                    echo "<meta http-equiv='refresh' content='0; url=?page=filter_dokter'>";
                  }
                }
              ?>
          </div>
    </div>
