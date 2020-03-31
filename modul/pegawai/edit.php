<?php
error_reporting(0);
$id = base64_decode($_GET["id"]);
$sqlku = mysqli_query($konek,"SELECT * FROM tbl_pegawai WHERE kode='$id'");
$data  = mysqli_fetch_array($sqlku);

$spesialis=$data['kode_spesialis'];
$jabatan=$data['kode_jabatan'];
$pendidikan=$data['kode_pendidikan'];
$pekerjaan=$data['kode_pekerjaan'];
?>
<div class="col-md-12">    
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">EDIT DATA PEGAWAI</h3>
            </div>
               <form class="form-horizontal" method="POST" action="">
              <div class="box-body">
            <div class="modal-body">


              <div class="row">
        <div class="col-md-12">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">HALAMAN I</a></li>
              <li><a href="#tab_2" data-toggle="tab">HALAMAN II</a></li>
              <li><a href="#tab_3" data-toggle="tab">LANGKAH III</a></li>
              <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-users"></i></a></li>
            </ul>
            <div class="tab-content">
              <!-- Tab I -->
              <div class="tab-pane active" id="tab_1">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">NIP</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" id="uraian" name="txtnip" value="<?php echo $data['nip'];?>" onkeypress="return hanyaAngka(event)" placeholder="NIDN Dosen" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nama</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="uraian" name="txtnama" value="<?php echo $data['nama'];?>" placeholder="Nama Lengkap Dosen" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">T. Lahir</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="uraian" name="txttempatlahir" value="<?php echo $data['tempat_lahir'];?>" placeholder="Tempat Tanggal Lahir" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Tgl Lahir</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" name="txttanggal" value="<?php echo $data['tgl_lahir'];?>" placeholder="Tangal Lahir" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                  </div>
                </div>

                  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">J.Kelamin</label>
                  <div class="col-sm-10">
                        <?php $cbjeniskelamin = $data['jenis_kelamin']; ?>
                        <select name="cbjeniskelamin" class="form-control select2" style="width: 100%;">
                            <option <?php echo ($cbjeniskelamin == 'Laki-Laki') ? "selected": "" ?>>Laki-Laki</option>
                            <option <?php echo ($cbjeniskelamin == 'Perempuan') ? "selected": "" ?>>Perempuan</option>
                        </select>
                  </div>
                </div>

              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">
                  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">HandPhone</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" id="uraian" name="txthanphone" value="<?php echo $data['handphone'];?>" placeholder="HandPhone" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                  <div class="col-sm-10">
                    <input type="email"  class="form-control" id="uraian" name="txtemail" value="<?php echo $data['email'];?>"  placeholder="Email Contoh : delishulu@gmail.com">
                  </div>
                </div>


                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Password</label>
                  <div class="col-sm-10">
                    <input type="password"  class="form-control" id="uraian" name="txtpassword" value="<?php echo $data['password'];?>" placeholder="Password" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                  </div>
                </div>


                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Alamat</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" name="txtalamat" placeholder="Alamat"><?php echo $data['alamat'];?></textarea>
                  </div>
                </div>
                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Status</label>
                  <div class="col-sm-10">
                       <?php $cbketerangan = $data['keterangan']; ?>
                        <select name="cbketerangan" class="form-control select2" style="width: 100%;">
                            <option <?php echo ($cbstatus == 'Aktif') ? "selected": "" ?>>Aktif</option>
                            <option <?php echo ($cbstatus == 'Tidak Aktif') ? "selected": "" ?>>Tidak Aktif</option>
                        </select>
                  </div>
                </div>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_3">
               <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Spesialis</label>
                  <div class="col-sm-10">
                    <select name="cbspesialis" class="form-control select2" style="width: 100%;">
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
                
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Jabatan</label>
                  <div class="col-sm-10">
                        <select name="cbjabatan" class="form-control select2" style="width: 100%;">
                      <?php
                        $qry = mysqli_query($konek,"SELECT * from tbl_jabatan"); 
                        while ($data=mysqli_fetch_array($qry)) 
                        {
                        ?>
                        <option class="form-control" value="<?php echo $data["kode"]; ?>" <?php 
                            if($jabatan==$data['kode']){echo "selected";} ?>> <?php echo $data['uraian']; ?></option><?php
                        }
                      ?>
                        </select>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Pendidikan</label>
                  <div class="col-sm-10">
                        <select name="cbpendidikan" class="form-control select2" style="width: 100%;">
                      <?php
                        $qry = mysqli_query($konek,"SELECT * from tbl_pendidikan"); 
                        while ($data=mysqli_fetch_array($qry)) 
                        {
                        ?>
                        <option class="form-control" value="<?php echo $data["kode"]; ?>" <?php 
                            if($pendidikan==$data['kode']){echo "selected";} ?>> <?php echo $data['uraian']; ?></option><?php
                        }
                      ?>
                        </select>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Pekerjaan</label>
                  <div class="col-sm-10">
                       <select name="cbpekerjaan" class="form-control select2" style="width: 100%;">
                    <?php
                        $qry = mysqli_query($konek,"SELECT * from tbl_pekerjaan"); 
                        while ($data=mysqli_fetch_array($qry)) 
                        {
                        ?>
                        <option class="form-control" value="<?php echo $data["kode"]; ?>" <?php 
                            if($pekerjaan==$data['kode']){echo "selected";} ?>> <?php echo $data['uraian']; ?></option><?php
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
                                $cbspesialis =$_POST['cbspesialis'];
                                $cbpekerjaan =$_POST['cbpekerjaan'];
                                $cbpendidikan =$_POST['cbpendidikan'];
                                $cbjabatan =$_POST['cbjabatan'];
                                $txtnip =$_POST['txtnip'];
                                $txtnama =$_POST['txtnama'];
                                $txthanphone =$_POST['txthanphone'];
                                $txttempatlahir =$_POST['txttempatlahir'];
                                $cbjeniskelamin =$_POST['cbjeniskelamin'];
                                $txtemail =$_POST['txtemail'];
                                $txtpassword =md5($_POST['txtpassword']);
                                $cbketerangan =$_POST['cbketerangan'];
                                $txttanggal =$_POST['txttanggal'];
                                $txtalamat =$_POST['txtalamat'];
                                
            $edit = mysqli_query($konek,"UPDATE  tbl_pegawai SET kode_spesialis='$cbspesialis',kode_pekerjaan='$cbpekerjaan',kode_pendidikan='$cbpendidikan',kode_jabatan='$cbjabatan',nip='$txtnip',nama='$txtnama',tempat_lahir='$txttempatlahir',tgl_lahir='$txttanggal',jenis_kelamin='$cbjeniskelamin',alamat='$txtalamat',handphone='$txthanphone',email='$txtemail',password='$txtpassword',keterangan='$cbketerangan' WHERE kode='$id'");
            if ($edit) {  ?>


              <script type="text/javascript">
                document.location.href="beranda.php?page=pegawai";
              </script>
              </script>
              <?php
                  }else{
                    echo "<script>alert('Terjadi Kesalahan Inputan. Harap Coba Lagi')</script>";
                    echo "<meta http-equiv='refresh' content='0; url=?page=pegawai'>";
                  }
                }
              ?>
          </div>
    </div>
