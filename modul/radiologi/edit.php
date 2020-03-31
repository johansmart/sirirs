<?php
error_reporting(0);
$id = base64_decode($_GET["id"]);
$sqlku = mysqli_query($konek,"SELECT * FROM tbl_photo WHERE kode='$id'");
$data  = mysqli_fetch_array($sqlku);
$pasien=$data['kode_pasien'];
$dokter=$data['kode_dokter'];
$ruangan=$data['kode_ruangan'];
$tindakan=$data['kode_tindakan'];

?>
<div class="col-md-12">    
          <div class="box box-info">
            <!-- <div class="box-header with-border"> -->
              <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 <a href="beranda.php?page=dGFtcGlscmFkaW9sb2dpZGVsaXM="> <span aria-hidden="true">Tampil</span></button></a>
                <h4 class="modal-title">Input Radiologi </h4>
              </div>

               <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="">
              <div class="modal-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Keterangan</label>
                  <div class="col-sm-10">
                    <textarea name="txtketerangan" class="form-control" rows="5" placeholder="Keterangan"><?php echo $data['keterangan'];?></textarea>
                  </div>
                </div>
                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Kesimpulan</label>
                  <div class="col-sm-10">
                    <textarea name="txtkesimpulan" class="form-control" rows="4" placeholder="Kesimpulan"><?php echo $data['kesimpulan'];?></textarea>
                  </div>
                </div>


                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Pasien</label>
                  <div class="col-sm-10">
                        <select name="cbpasien" class="form-control select2" style="width: 100%;">
                        <?php
                        $qry = mysqli_query($konek,"SELECT * from tbl_pasien"); 
                        while ($data=mysqli_fetch_array($qry)) 
                        {
                        ?>
                        <option class="form-control" value="<?php echo $data["kode"]; ?>" <?php 
                            if($pasien==$data['kode']){echo "selected";} ?>> <?php echo $data['kode']; ?> |  <?php echo $data['nama']; ?></option><?php
                        }
                        ?>
                      </select>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Dokter Radiologi</label>
                  <div class="col-sm-10">
                        <select name="cbdokter" class="form-control select2" style="width: 100%;">
                        <?php
                        $qry = mysqli_query($konek,"select `tbl_pegawai`.`kode` AS `kode`,`tbl_pegawai`.`kode_spesialis` AS `kode_spesialis`,`tbl_pegawai`.`kode_pekerjaan` AS `kode_pekerjaan`,`tbl_pegawai`.`kode_pendidikan` AS `kode_pendidikan`,`tbl_pegawai`.`kode_jabatan` AS `kode_jabatan`,`tbl_pegawai`.`nip` AS `nip`,`tbl_pegawai`.`nama` AS `nama`,`tbl_pegawai`.`tempat_lahir` AS `tempat_lahir`,`tbl_pegawai`.`tgl_lahir` AS `tgl_lahir`,`tbl_pegawai`.`jenis_kelamin` AS `jenis_kelamin`,`tbl_pegawai`.`email` AS `email`,`tbl_pegawai`.`handphone` AS `handphone`,`tbl_pegawai`.`password` AS `password`,`tbl_pegawai`.`keterangan` AS `keterangan`,`tbl_pegawai`.`gambar` AS `gambar`,`tbl_pegawai`.`hari_senin` AS `hari_senin`,`tbl_pegawai`.`hari_selasa` AS `hari_selasa`,`tbl_pegawai`.`hari_rabu` AS `hari_rabu`,`tbl_pegawai`.`hari_kamis` AS `hari_kamis`,`tbl_pegawai`.`hari_jumat` AS `hari_jumat`,`tbl_pegawai`.`hari_sabtu` AS `hari_sabtu`,`tbl_pegawai`.`hari_minggu` AS `hari_minggu`,`tbl_pegawai`.`tgl_update` AS `tgl_update`,`tbl_pekerjaan`.`uraian` AS `pekerjaan`,`tbl_pendidikan`.`uraian` AS `pendidikan`,`tbl_spesialis`.`uraian` AS `spesialis`,`tbl_jabatan`.`uraian` AS `jabatan` from ((((`tbl_jabatan` join `tbl_pegawai` on((`tbl_pegawai`.`kode_jabatan` = `tbl_jabatan`.`kode`))) join `tbl_pendidikan` on((`tbl_pegawai`.`kode_pendidikan` = `tbl_pendidikan`.`kode`))) join `tbl_pekerjaan` on((`tbl_pegawai`.`kode_pekerjaan` = `tbl_pekerjaan`.`kode`))) join `tbl_spesialis` on((`tbl_pegawai`.`kode_spesialis` = `tbl_spesialis`.`kode`))) where ((`tbl_jabatan`.`uraian` = 'Dokter Umum') or (`tbl_jabatan`.`uraian` = 'Dokter Spesialis')) order by `tbl_pegawai`.`kode` desc"); 
                        while ($data=mysqli_fetch_array($qry)) 
                        {
                        ?>
                        <option class="form-control" value="<?php echo $data["kode"]; ?>" <?php 
                            if($dokter==$data['kode']){echo "selected";} ?>> <?php echo $data['nama']; ?></option><?php
                        }
                        ?>
                      </select>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Tindakan</label>
                  <div class="col-sm-10">
                        <select name="cbtindakan" class="form-control select2" style="width: 100%;">
                        <?php
                        $qry = mysqli_query($konek,"SELECT * from tbl_tindakan"); 
                        while ($data=mysqli_fetch_array($qry)) 
                        {
                        ?>
                        <option class="form-control" value="<?php echo $data["kode"]; ?>" <?php 
                            if($tindakan==$data['kode']){echo "selected";} ?>> <?php echo $data['uraian']; ?></option><?php
                        }
                        ?>
                      </select>
                  </div>
                </div>


               





                 <!-- AKHIR -->
                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Ruangan</label>
                  <div class="col-sm-10">
                         <select name="cbruangan" class="form-control select2" style="width: 100%;">
                        <?php
                        $qry = mysqli_query($konek,"SELECT * from tbl_ruangan"); 
                        while ($data=mysqli_fetch_array($qry)) 
                        {
                        ?>
                        <option class="form-control" value="<?php echo $data["kode"]; ?>" <?php 
                            if($ruangan==$data['kode']){echo "selected";} ?>> <?php echo $data['ruangan']; ?></option><?php
                        }
                        ?>
                      </select>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <input type="submit" name="btnedit" class="btn btn-primary pull-right" value="Update">
              </div>
            </div>
          </form>
            </div>
      <!-- </div> -->
    <?php
          if (isset($_POST["btnedit"])){
                                  $txtkode=$_POST['txtkode'];
                                  $cbtindakan=$_POST['cbtindakan'];
                                  $cbruangan=$_POST['cbruangan'];
                                  $cbdokter=$_POST['cbdokter'];
                                  $cbpasien=$_POST['cbpasien'];
                                  $txtkesimpulan=$_POST['txtkesimpulan'];
                                  $txtketerangan=$_POST['txtketerangan'];

            $edit = mysqli_query($konek,"UPDATE  tbl_photo SET kode_dokter='$cbdokter',kode_ruangan='$cbruangan',kode_tindakan='$cbtindakan',kode_pasien='$cbpasien',kesimpulan='$txtkesimpulan',keterangan='$txtketerangan' WHERE kode='$id'");
            if ($edit)
            {
              ?>
              <script type="text/javascript">
                document.location.href="beranda.php?page=dGFtcGlscmFkaW9sb2dpZGVsaXM=";
              </script>
              <?php
            }else{
             echo "<script>alert('Terjadi Kesalahan Inputan')</script>";
        echo "<meta http-equiv='refresh' content='0; url=?page=cmFkaW9sb2dpdXBkYXRlZGF0YQ=='>";
            }
          }
        ?>
          </div>
    </div>


          <div class="box box-info">
            <div class="box-header with-border">
              <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 <a href="beranda.php?page=dGFtcGlscmFkaW9sb2dpZGVsaXM="> </button></a>
                <h4 class="modal-title">Upload Gambar Baru </h4>
              </div>

               <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="">
              <div class="modal-body">
                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Gambar Radiologi</label>
                  <div class="col-sm-10">
                    <input type="file" class="form-control" id="uraian" name="txtgambar" required oninvalid="this.setCustomValidity('Gambar Wajib di Isi')" oninput="setCustomValidity('')" />
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <input type="submit" name="btnuplad" class="btn btn-primary pull-right" value="Kirim Gambar Baru">
              </div>
            </div>
          </form>
            </div>
      </div>
        <?php
                 if (isset($_POST["btnuplad"])){
                                  $nama_file   = strtolower($_FILES['txtgambar']['name']);
                                  $lokasi_file = $_FILES['txtgambar']['tmp_name'];
                  $upoadgambar = mysqli_query($konek,"UPDATE  tbl_photo SET gambar='$nama_file' WHERE kode='$id'");
                  if ($upoadgambar){
                    if(!empty($lokasi_file)){
                    move_uploaded_file($lokasi_file, "gambar/radiologi/$nama_file");
                    ?>
                    <script type="text/javascript">
                     document.location.href="beranda.php?page=dGFtcGlscmFkaW9sb2dpZGVsaXM=";
                    </script>
                    <?php
                  }else{
                    echo "Terjadi kesalahan";
                  }
                }
              }
              ?>