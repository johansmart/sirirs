<?php
error_reporting(0);
$id = base64_decode($_GET["id"]);
$sqlku = mysqli_query($konek,"SELECT * FROM tbl_pasien WHERE kode='$id'");
$data  = mysqli_fetch_array($sqlku);
?>
<div class="col-md-12">    
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">EDIT DATA PASIEN</h3>
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
              <li><a href="#" data-toggle="tab">TGL REGISTRASI : <?php echo $data['tgl_registrasi']; ?> </a></li>
              <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-users"></i></a></li>
            </ul>
            <div class="tab-content">
              <!-- Tab I -->
              <div class="tab-pane active" id="tab_1">
                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">RM</label>
                  <div class="col-sm-2">
                    <input type="text" class="form-control" id="uraian" value="<?php echo $data['kode']; ?>" disabled="disabled"  name="txtkode" onkeypress="return hanyaAngka(event)" placeholder="Rekam Medis" required oninvalid="this.setCustomValidity('No.Registrasi Ini tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                  </div>
                </div>
               <!--  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">RM</label>
                  <div class="col-sm-2">
                    <input type="number" class="form-control" id="uraian" name="txtrm" value="<?php echo $data['rekam_medis']; ?>" onkeypress="return hanyaAngka(event)" placeholder="Rekam Medis" required oninvalid="this.setCustomValidity('Rekam Medis tidak boleh kosong')" oninput="setCustomValidity('')" />
                  </div>
                </div> -->

                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">NO.KTP</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" id="uraian" name="txtnoktp" value="<?php echo $data['nik_ktp']; ?>" placeholder="Nomor KTP" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                  </div>
                </div>


                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nama</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="uraian" name="txtnama" placeholder="Nama Pasien" value="<?php echo $data['nama']; ?>" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">TT Lahir</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="uraian" name="txttempatlahir" value="<?php echo $data['tempat_lahir']; ?>" placeholder="Tempat Tanggal Lahir" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                  </div>
                </div>

                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Umur</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="uraian" name="txtumur" value="<?php echo $data['umur']; ?>" placeholder="Umur" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                  </div>
                </div>


                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Tgl Lahir</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" name="txttanggal" placeholder="Tangal Lahir" value="<?php echo $data['tgl_lahir']; ?>" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
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
                      <input type="number" class="form-control" id="uraian" name="txthanphone" value="<?php echo $data['no_hp']; ?>" placeholder="HandPhone" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                    </div>
                  </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Alamat</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" name="txtalamat"  placeholder="Alamat"><?php echo $data['alamat'];?></textarea>
                  </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Nama Ayah</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="uraian" name="txtayah" value="<?php echo $data['ayah']; ?>" placeholder="Nama Ayah" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                    </div>
                  </div>



                   <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Nama Ibu</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="uraian" name="txtibu" value="<?php echo $data['ibu']; ?>" placeholder="Nama Ibu" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                    </div>
                  </div>


                   <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Nama Wali</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="uraian" name="txtwali" value="<?php echo $data['wali']; ?>" placeholder="Nama Wali" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                    </div>
                  </div>


                   <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">HP.Keluarga</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="uraian" name="txtpkeluarga" value="<?php echo $data['hp_keluarga']; ?>" placeholder="Keluarga" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                    </div>
                  </div>


              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_3">
              <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">User Name</label>
                  <div class="col-sm-10">
                    <input type="text"  class="form-control" id="uraian" name="txtusername" value="<?php echo $data['user_name']; ?>"  placeholder="User Name">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Password</label>
                  <div class="col-sm-10">
                    <input type="password"  class="form-control" id="uraian" name="txtpassword" value="<?php echo $data['password']; ?>" placeholder="Password" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                  </div>
                </div>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_3">
               
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
                        <input type="submit" name="btnedit" class="btn btn-primary pull-right" value="Edit">
                    </div>
                  </div>
                </div>
              </div>
            </form>
    <?php
          if (isset($_POST["btnedit"])){
                                 $txtnoktp =$_POST['txtnoktp'];
                                $txtnama =$_POST['txtnama'];
                                $txtkode =$_POST['txtkode'];
                                // $txtrm =$_POST['txtrm'];
                                $txthanphone =$_POST['txthanphone'];
                                $txttempatlahir =$_POST['txttempatlahir'];
                                $cbjeniskelamin =$_POST['cbjeniskelamin'];
                                $txtusername =$_POST['txtusername'];
                                $txtpassword =md5($_POST['txtpassword']);
                                $txttanggal =$_POST['txttanggal'];
                                $txtumur =$_POST['txtumur'];
                                $txtalamat =$_POST['txtalamat'];
                                $tgl_registrasi = date("Y-m-d H:i:s"); 


                                 $txtayah =$_POST['txtayah'];
                                $txtibu =$_POST['txtibu'];
                                $txtwali =$_POST['txtwali'];
                                $txtpkeluarga =$_POST['txtpkeluarga'];
                                
            $edit = mysqli_query($konek,"UPDATE  tbl_pasien SET nama='$txtnama',jenis_kelamin='$cbjeniskelamin',tempat_lahir='$txttempatlahir',tgl_lahir='$txttanggal',nik_ktp='$txtnoktp',alamat='$txtalamat',umur='$txtumur',no_hp='$txthanphone',user_name='$txtusername',password='$txtpassword',ibu='$txtibu',ayah='$txtayah',wali='$txtwali',hp_keluarga='$txtpkeluarga' WHERE kode='$id'");
            if ($edit) {  ?>
              <script type="text/javascript">
                document.location.href="beranda.php?page=pasien";
              </script>
              </script>
              <?php
                  }else{
                    echo "<script>alert('Terjadi Kesalahan Inputan. Harap Coba Lagi')</script>";
                    echo "<meta http-equiv='refresh' content='0; url=?page=pasien'>";
                  }
                }
              ?>
          </div>
    </div>
