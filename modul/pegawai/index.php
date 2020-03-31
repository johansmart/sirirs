  <?php
  error_reporting(0); 
  $carikode = mysqli_query($konek, "select max(kode) from tbl_pegawai") or die (mysql_error());
  $datakode = mysqli_fetch_array($carikode);
  if ($datakode) {
   $nilaikode = substr($datakode[0], 1);
   $kode = (int) $nilaikode;
   $kode = $kode + 1;
   $kode_otomatis = "P".str_pad($kode, 5, "0", STR_PAD_LEFT);
  } else {
   $kode_otomatis = "P00001";
  }
  ?>
        <!-- UNTUK MODAL -->
        <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">DATA PEGAWAI</h4>
              </div>
           <form class="form-horizontal" method="POST" action="">
              <div class="modal-body">
                <div class="row">
        <div class="col-md-12">
          <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">HALAMAN I</a></li>
              <li><a href="#tab_2" data-toggle="tab">HALAMAN II</a></li>
              <li><a href="#tab_3" data-toggle="tab">HALAMAN III</a></li>
              <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-users"></i></a></li>
            </ul>
            <div class="tab-content">
              <!-- Tab I -->
              <div class="tab-pane active" id="tab_1">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">KODE</label>
                   <div class="col-sm-3">
                    <input type="text" class="form-control" id="uraian" value="<?php echo $kode_otomatis ?>" name="txtkode" placeholder="Kode" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                  </div>
                  <label for="inputEmail3" class="col-sm-2 control-label">NIP</label>
                  <div class="col-sm-5">
                    <input type="number" class="form-control" id="uraian" name="txtnip" onkeypress="return hanyaAngka(event)" placeholder="NIP" required oninvalid="this.setCustomValidity('Nim Ini Tidak Boloh Kosong')" oninput="setCustomValidity('')" />
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nama</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="uraian" name="txtnama" placeholder="Nama Pegawai" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">TT Lahir</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="uraian" name="txttempatlahir" placeholder="Tempat Tanggal Lahir" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
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


                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Spesialis</label>
                  <div class="col-sm-10">
                        <select name="cbspesialis" class="form-control select2" style="width: 100%;">
                                    <?php
                                      $qry = mysqli_query($konek,"select * from tbl_spesialis"); 
                                      while ($d=mysqli_fetch_array($qry)) { ?>
                                      <option class="form-control" value="<?php echo $d["kode"]; ?>"><?php echo $d['uraian']; ?>
                                      </option>
                                    <?php } ?>
                        </select>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Pekerjaan</label>
                  <div class="col-sm-10">
                        <select name="cbpekerjaan" class="form-control select2" style="width: 100%;">
                                    <?php
                                      $qry = mysqli_query($konek,"select * from tbl_pekerjaan"); 
                                      while ($d=mysqli_fetch_array($qry)) { ?>
                                      <option class="form-control" value="<?php echo $d["kode"]; ?>"><?php echo $d['uraian']; ?>
                                      </option>
                                    <?php } ?>
                        </select>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Pendidikan</label>
                  <div class="col-sm-10">
                       <select name="cbpendidikan" class="form-control select2" style="width: 100%;">
                                    <?php
                                      $qry = mysqli_query($konek,"select * from tbl_pendidikan"); 
                                      while ($d=mysqli_fetch_array($qry)) { ?>
                                      <option class="form-control" value="<?php echo $d["kode"]; ?>"><?php echo $d['uraian']; ?>
                                      </option>
                                    <?php } ?>
                        </select>
                  </div>
                </div>
                
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Jabatan</label>
                  <div class="col-sm-10">
                       <select name="cbjabatan" class="form-control select2" style="width: 100%;">
                                    <?php
                                      $qry = mysqli_query($konek,"select * from tbl_jabatan"); 
                                      while ($d=mysqli_fetch_array($qry)) { ?>
                                      <option class="form-control" value="<?php echo $d["kode"]; ?>"><?php echo $d['uraian']; ?>
                                      </option>
                                    <?php } ?>
                        </select>
                  </div>
                </div>
                


                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">HandPhone</label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" id="uraian" name="txthanphone" placeholder="HandPhone" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                    </div>
                  </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                  <div class="col-sm-10">
                    <input type="email"  class="form-control" id="uraian" name="txtemail"  placeholder="Email Contoh : delishulu@gmail.com">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Password</label>
                  <div class="col-sm-10">
                    <input type="password"  class="form-control" id="uraian" name="txtpassword" placeholder="Password" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Alamat</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" name="txtalamat" placeholder="Alamat"></textarea>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Status Pegawai</label>
                  <div class="col-sm-10">
                        <select name="cbketerangan" class="form-control select2" style="width: 100%;">
                                 <option>Aktif</option>
                                 <option>Tidak Aktif</option>
                        </select>
                  </div>
                </div>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_3">
              <p>Input Data Pegawai Dengan Benar</p>
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
                                $cbspesialis =$_POST['cbspesialis'];
                                $cbpekerjaan =$_POST['cbpekerjaan'];
                                $cbpendidikan =$_POST['cbpendidikan'];
                                $cbjabatan =$_POST['cbjabatan'];
                                $txtnip =$_POST['txtnip'];
                                 $txtkode =$_POST['txtkode'];
                                $txtnama =$_POST['txtnama'];
                                $txthanphone =$_POST['txthanphone'];
                                $txttempatlahir =$_POST['txttempatlahir'];
                                $cbjeniskelamin =$_POST['cbjeniskelamin'];
                                $txtemail =$_POST['txtemail'];
                                $txtpassword =md5($_POST['txtpassword']);
                                $cbketerangan =$_POST['cbketerangan'];
                                $txttanggal =$_POST['txttanggal'];
                                $txtalamat =$_POST['txtalamat'];
                                $tgl_update = date("Y-m-d H:i:s"); 
                          $cek_user = mysqli_num_rows(mysqli_query($konek,"select * from tbl_pegawai where nip = '$txtnip'"));
                          if ($cek_user > 0) {
                            echo "<script>alert('NIP Pegawai Sudah Ada di Database')</script>";
                          }else {
                      $simpan = mysqli_query($konek,"INSERT INTO tbl_pegawai (kode_spesialis,kode_pekerjaan,kode_pendidikan,kode_jabatan,nip,nama,tempat_lahir,tgl_lahir,jenis_kelamin,email,handphone,password,keterangan,gambar,alamat,tgl_update,kode) VALUES ('$cbspesialis','$cbpekerjaan','$cbpendidikan','$cbjabatan','$txtnip','$txtnama','$txttempatlahir','$txttanggal','$cbjeniskelamin','$txtemail','$txthanphone','$txtpassword','$cbketerangan','pegwai.png','$txtalamat','$tgl_update','$txtkode')");
                       if ($simpan){
                          ?>
                              

              <script type="text/javascript">
                document.location.href="beranda.php?page=pegawai";
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

              <a href="beranda.php?page=pegawai" class="btn btn-app">
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
              <h3 class="box-title">DAFTAR PEGAWAI</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
              <!-- <div class="box-body table-responsive no-padding"> -->
               <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>NO</th>
                  <th>NIP</th>
                  <th>NAMA PEGAWAI</th>
                  <th>SPESIALIS</th>
                  <th align="right">ACTION</th>
                </tr>
                </thead>
                <tbody>
                <?php
                    $no =1;
                    $qry = mysqli_query($konek,"select `tbl_pegawai`.`kode` AS `kode`,`tbl_pegawai`.`kode_spesialis` AS `kode_spesialis`,`tbl_pegawai`.`kode_pekerjaan` AS `kode_pekerjaan`,`tbl_pegawai`.`kode_pendidikan` AS `kode_pendidikan`,`tbl_pegawai`.`kode_jabatan` AS `kode_jabatan`,`tbl_pegawai`.`nip` AS `nip`,`tbl_pegawai`.`nama` AS `nama`,`tbl_pegawai`.`tempat_lahir` AS `tempat_lahir`,`tbl_pegawai`.`tgl_lahir` AS `tgl_lahir`,`tbl_pegawai`.`jenis_kelamin` AS `jenis_kelamin`,`tbl_pegawai`.`email` AS `email`,`tbl_pegawai`.`handphone` AS `handphone`,`tbl_pegawai`.`password` AS `password`,`tbl_pegawai`.`keterangan` AS `keterangan`,`tbl_pegawai`.`gambar` AS `gambar`,`tbl_pegawai`.`hari_senin` AS `hari_senin`,`tbl_pegawai`.`hari_selasa` AS `hari_selasa`,`tbl_pegawai`.`hari_rabu` AS `hari_rabu`,`tbl_pegawai`.`hari_kamis` AS `hari_kamis`,`tbl_pegawai`.`hari_jumat` AS `hari_jumat`,`tbl_pegawai`.`hari_sabtu` AS `hari_sabtu`,`tbl_pegawai`.`hari_minggu` AS `hari_minggu`,`tbl_pegawai`.`tgl_update` AS `tgl_update`,`tbl_pekerjaan`.`uraian` AS `pekerjaan`,`tbl_pendidikan`.`uraian` AS `pendidikan`,`tbl_spesialis`.`uraian` AS `spesialis`,`tbl_jabatan`.`uraian` AS `jabatan` from ((((`tbl_jabatan` join `tbl_pegawai` on((`tbl_pegawai`.`kode_jabatan` = `tbl_jabatan`.`kode`))) join `tbl_pendidikan` on((`tbl_pegawai`.`kode_pendidikan` = `tbl_pendidikan`.`kode`))) join `tbl_pekerjaan` on((`tbl_pegawai`.`kode_pekerjaan` = `tbl_pekerjaan`.`kode`))) join `tbl_spesialis` on((`tbl_pegawai`.`kode_spesialis` = `tbl_spesialis`.`kode`))) order by `tbl_pegawai`.`kode` desc");
                    while ($data=mysqli_fetch_array($qry)) {
                ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $data['nip'];?></td>
                  <td><?php echo $data['nama'];?>    <a class="btn btn-danger btn-xs"><?php echo $data['keterangan'];?></a></td>
                  <td><?php echo $data['spesialis'];?></td>
                  <td align="right"> 
                    <a href="beranda.php?page=detail_jadwal&id=<?php echo base64_encode($data['kode']); ?>"><button  class="btn btn-primary fa fa-list"> Detail</button></a>
                    <a href="beranda.php?page=edit_pegawai&id=<?php echo base64_encode($data['kode']); ?>"><button  class="btn btn-primary fa fa-edit"> Edit</button></a>
                    <a  onClick="return confirm('Yakin Anda Menghapus ?')" href="beranda.php?page=pegawai&hapus=<?php echo $data['kode']; ?>"><button  class="btn btn-primary fa fa-cut"> Hapus</button></a>
                </tr>
              <?php } ?>
                </tfoot>
              </table>
              
            </div>
            <!-- /.box-body -->
          </div>
<?php
if (isset($_GET[hapus])){
  $qry=mysqli_query($konek,"delete from tbl_pegawai where kode='".$_GET["hapus"]."'");
  if ($qry){
    echo "<script>alert('Data Berhasil di Hapus')</script>";
        echo "<meta http-equiv='refresh' content='0; url=?page=pegawai'>";
    } else {
        Echo "Gagal di Hapus".mysqli_error();
        echo "<meta http-equiv='refresh' content='0; url=?page=pegawai'>";
    }
  }
?>
