<?php
  error_reporting(0); 
  $carikode = mysqli_query($konek, "select max(kode) from tbl_pasien") or die (mysql_error());
  $datakode = mysqli_fetch_array($carikode);
  if ($datakode) {
   $nilaikode = substr($datakode[0], 1);
   $kode = (int) $nilaikode;
   $kode = $kode + 1;
   $kode_otomatis = "R".str_pad($kode, 5, "0", STR_PAD_LEFT);
  } else {
   $kode_otomatis = "R00001";
  }

  ?>
        <!-- UNTUK MODAL -->
        <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">MEDICAL RECORD</h4>
              </div>
           <form class="form-horizontal" method="POST" action="">
              <div class="modal-body">
                <div class="row">
        <div class="col-md-12">
          <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">STEP-I</a></li>
              <li><a href="#tab_2" data-toggle="tab">STEP-II</a></li>
              <li><a href="#tab_3" data-toggle="tab">STEP-III</a></li>
              <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-users"></i></a></li>
            </ul>
            <div class="tab-content">
              <!-- Tab I -->
              <div class="tab-pane active" id="tab_1">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">RM</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="uraian" value="<?php echo $kode_otomatis ?>"  name="txtkode" onkeypress="return hanyaAngka(event)" placeholder="Rekam Medis" required oninvalid="this.setCustomValidity('No.Registrasi Ini tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                  </div>
                </div>
                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">NO.KTP</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" id="uraian" name="txtnoktp" placeholder="Nomor KTP" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                  </div>
                </div>


                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nama</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="uraian" name="txtnama" placeholder="Nama Pasien" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">TT Lahir</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="uraian" name="txttempatlahir" placeholder="Tempat Tanggal Lahir" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                  </div>
                </div>

                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Umur</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="uraian" name="txtumur" placeholder="Umur" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                  </div>
                </div>


                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Tgl Lahir</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" name="txttanggal" placeholder="Tangal Lahir" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">J.Kelamin</label>
                  <div class="col-sm-10">
                        <select name="cbjeniskelamin" class="form-control select2" style="width: 100%;">
                                   <option>Laki-Laki</option>
                                   <option>Perempuan</option>
                        </select>
                  </div>
                </div>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">HandPhone</label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" id="uraian" name="txthanphone" placeholder="HandPhone" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                    </div>
                  </div>



                   <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Nama Ayah</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="uraian" name="txtayah" placeholder="Nama Ayah" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                    </div>
                  </div>



                   <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Nama Ibu</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="uraian" name="txtibu" placeholder="Nama Ibu" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                    </div>
                  </div>


                   <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Nama Wali</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="uraian" name="txtwali" placeholder="Nama Wali" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                    </div>
                  </div>


                   <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">HP.Keluarga</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="uraian" name="txtpkeluarga" placeholder="Keluarga" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                    </div>
                  </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Alamat</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" name="txtalamat" placeholder="Alamat"></textarea>
                  </div>
                </div>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_3">
              <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">User Name</label>
                  <div class="col-sm-10">
                    <input type="text"  class="form-control" id="uraian" name="txtusername"  placeholder="User Name">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Password</label>
                  <div class="col-sm-10">
                    <input type="password"  class="form-control" id="uraian" name="txtpassword" placeholder="Password" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
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
              <div class="modal-footer">
                <button type="button" class="btn btn-primary right" data-dismiss="modal">Close</button>
                <input type="submit" name="btnsimpan" class="btn btn-primary pull-right" value="Simpan">
              </div>
            </div>
          </form>
          </div>
        </div>
      <!-- AKHIR MODAL -->
                     <?php
                            if (isset($_POST["btnsimpan"])){
                                $txtnoktp =$_POST['txtnoktp'];
                                $txtnama =$_POST['txtnama'];
                                $txtkode =$_POST['txtkode'];
                                $txtumur =$_POST['txtumur'];
                                $txthanphone =$_POST['txthanphone'];
                                $txttempatlahir =$_POST['txttempatlahir'];
                                $cbjeniskelamin =$_POST['cbjeniskelamin'];
                                $txtusername =$_POST['txtusername'];
                                $txtpassword =md5($_POST['txtpassword']);
                                $txttanggal =$_POST['txttanggal'];
                                $txtalamat =$_POST['txtalamat'];
                                $tgl_registrasi = date("Y-m-d H:i:s"); 

                                $txtayah =$_POST['txtayah'];
                                $txtibu =$_POST['txtibu'];
                                $txtwali =$_POST['txtwali'];
                                $txtpkeluarga =$_POST['txtpkeluarga'];

                          $cek_user = mysqli_num_rows(mysqli_query($konek,"select * from tbl_pasien where rekam_medis = '$txtrm'"));
                          if ($cek_user > 0) {
                            echo "<script>alert('REKAM MEDIS (RM) Sudah di Gunakan ')</script>";
                          }else {
                      $simpan = mysqli_query($konek,"INSERT INTO tbl_pasien (kode,nama,jenis_kelamin,tempat_lahir,tgl_lahir,nik_ktp,alamat,umur,no_hp,tgl_registrasi,user_name,password,wali,ayah,ibu,hp_keluarga) VALUES ('$txtkode','$txtnama','$cbjeniskelamin','$txttempatlahir','$txttanggal','$txtnoktp','$txtalamat','$txtumur','$txthanphone','$tgl_registrasi','$txtusername','$txtpassword','$txtwali','$txtayah','$txtibu','$txtpkeluarga')");
                       if ($simpan){
                          ?>
              <script type="text/javascript">
                document.location.href="beranda.php?page=pasien";
              </script>
                          <?php
                          }else{
                         echo "<script>alert('Gagal di simpan)</script>";
                        }
                      }
                    } 
                      ?>
<!-- Untuk Tabel  -->
      <div class="col-md-12">    
          <div class="box box-info">
            <div class="box-header with-border">
              <a class="btn btn-app"  data-toggle="modal" data-target="#modal-default">
                <i class="fa fa-edit"></i>Tambah
              </a>

              <a href="beranda.php?page=pasien" class="btn btn-app">
                <i class="fa fa-repeat"></i>Refresh
              </a>

              <a href="beranda.php?page=beranda" class="btn btn-app">
                <i class="fa fa-home"></i>Beranda
              </a>

            </div>
           
      </div>
    </div>
  </div>

<!--AWAL UNTUK DATA TABEL  -->
<div class="box">
            <div class="box-header">
              <h3 class="box-title">REGISTRASI PASIEN</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
              <!-- <div class="box-body table-responsive no-padding"> -->
               <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>NO</th>
                  <th>REKAM MEDIS & NIK KTP</th>
                  <th>NAMA PASIEN</th>
                  <th>TGL REGISTRASI</th>
                  <th align="right">ACTION</th>
                </tr>
                </thead>
                <tbody>
                <?php
                    $no =1;
                    $qry = mysqli_query($konek,"SELECT * FROM tbl_pasien");
                    while ($data=mysqli_fetch_array($qry)) {
                ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $data['kode'];?>    <a class="btn btn-danger btn-xs"><?php echo $data['nik_ktp'];?></a></td>
                  <td><?php echo $data['nama'];?></td>
                  <td><?php echo $data['tgl_registrasi'];?></td>
                  <td align="right"> 
                   
                    <a href="beranda.php?page=edit_pasien&id=<?php echo base64_encode($data['kode']); ?>"><button  class="btn btn-primary fa fa-edit"> Edit</button></a>
                    <a  onClick="return confirm('Yakin Anda Menghapus ?')" href="beranda.php?page=pasien&hapus=<?php echo $data['kode']; ?>"><button  class="btn btn-primary fa fa-cut"> Hapus</button></a>
                </tr>
              <?php } ?>
                </tfoot>
              </table>
              
            </div>
            <!-- /.box-body -->
          </div>
<?php
if (isset($_GET[hapus])){
  $qry=mysqli_query($konek,"delete from tbl_pasien where kode='".$_GET["hapus"]."'");
  if ($qry){
    echo "<script>alert('Data Berhasil di Hapus')</script>";
        echo "<meta http-equiv='refresh' content='0; url=?page=pasien'>";
    } else {
        Echo "Gagal di Hapus".mysqli_error();
        echo "<meta http-equiv='refresh' content='0; url=?page=pasien'>";
    }
  }
?>
