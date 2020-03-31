  <?php

  $carikode = mysqli_query($konek, "select max(kode) from tbl_photo") or die (mysql_error());
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
       
 
      <div class="col-md-12">    
          <div class="box box-info">
            <div class="box-header with-border">
              <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 <a href="beranda.php?page=dGFtcGlscmFkaW9sb2dpZGVsaXM="> <span aria-hidden="true">Tampil</span></button></a>
                <h4 class="modal-title">Input Radiologi </h4>
              </div>

               <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="">
              <div class="modal-body">

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">KODE</label>
                   <div class="col-sm-3">
                    <input type="text" class="form-control" id="uraian" value="<?php echo $kode_otomatis ?>" name="txtkode" placeholder="Kode" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                  </div>
                </div>

                  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Pasien</label>
                  <div class="col-sm-10">
                        <select name="cbpasien" class="form-control select2" style="width: 100%;">
                                    <?php
                                      $qry = mysqli_query($konek,"SELECT * FROM tbl_pasien"); 
                                      while ($d=mysqli_fetch_array($qry)) { ?>
                                      <option class="form-control" value="<?php echo $d["kode"]; ?>"><?php echo $d['kode']; ?>  | <?php echo $d['nama']; ?> 
                                      </option>
                                    <?php } ?>
                        </select>
                  </div>
                </div>



                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Dokter Radiologi</label>
                  <div class="col-sm-10">
                        <select name="cbdokter" class="form-control select2" style="width: 100%;">
                                    <?php
                                      $qry = mysqli_query($konek,"select `tbl_pegawai`.`kode` AS `kode`,`tbl_pegawai`.`kode_spesialis` AS `kode_spesialis`,`tbl_pegawai`.`kode_pekerjaan` AS `kode_pekerjaan`,`tbl_pegawai`.`kode_pendidikan` AS `kode_pendidikan`,`tbl_pegawai`.`kode_jabatan` AS `kode_jabatan`,`tbl_pegawai`.`nip` AS `nip`,`tbl_pegawai`.`nama` AS `nama`,`tbl_pegawai`.`tempat_lahir` AS `tempat_lahir`,`tbl_pegawai`.`tgl_lahir` AS `tgl_lahir`,`tbl_pegawai`.`jenis_kelamin` AS `jenis_kelamin`,`tbl_pegawai`.`email` AS `email`,`tbl_pegawai`.`handphone` AS `handphone`,`tbl_pegawai`.`password` AS `password`,`tbl_pegawai`.`keterangan` AS `keterangan`,`tbl_pegawai`.`gambar` AS `gambar`,`tbl_pegawai`.`hari_senin` AS `hari_senin`,`tbl_pegawai`.`hari_selasa` AS `hari_selasa`,`tbl_pegawai`.`hari_rabu` AS `hari_rabu`,`tbl_pegawai`.`hari_kamis` AS `hari_kamis`,`tbl_pegawai`.`hari_jumat` AS `hari_jumat`,`tbl_pegawai`.`hari_sabtu` AS `hari_sabtu`,`tbl_pegawai`.`hari_minggu` AS `hari_minggu`,`tbl_pegawai`.`tgl_update` AS `tgl_update`,`tbl_pekerjaan`.`uraian` AS `pekerjaan`,`tbl_pendidikan`.`uraian` AS `pendidikan`,`tbl_spesialis`.`uraian` AS `spesialis`,`tbl_jabatan`.`uraian` AS `jabatan` from ((((`tbl_jabatan` join `tbl_pegawai` on((`tbl_pegawai`.`kode_jabatan` = `tbl_jabatan`.`kode`))) join `tbl_pendidikan` on((`tbl_pegawai`.`kode_pendidikan` = `tbl_pendidikan`.`kode`))) join `tbl_pekerjaan` on((`tbl_pegawai`.`kode_pekerjaan` = `tbl_pekerjaan`.`kode`))) join `tbl_spesialis` on((`tbl_pegawai`.`kode_spesialis` = `tbl_spesialis`.`kode`))) where ((`tbl_jabatan`.`uraian` = 'Dokter Umum') or (`tbl_jabatan`.`uraian` = 'Dokter Spesialis')) order by `tbl_pegawai`.`kode` desc"); 
                                      while ($d=mysqli_fetch_array($qry)) { ?>
                                      <option class="form-control" value="<?php echo $d["kode"]; ?>"><?php echo $d['nama']; ?> 
                                      </option>
                                    <?php } ?>
                        </select>
                  </div>
                </div>
                 <!-- AKHIR -->
                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Ruangan / Poli</label>
                  <div class="col-sm-10">
                        <select name="cbruangan" class="form-control select2" style="width: 100%;">
                                    <?php
                                      $qry = mysqli_query($konek,"SELECT * FROM tbl_ruangan"); 
                                      while ($d=mysqli_fetch_array($qry)) { ?>
                                      <option class="form-control" value="<?php echo $d["kode"]; ?>"><?php echo $d['ruangan']; ?> 
                                      </option>
                                    <?php } ?>
                        </select>
                  </div>
                </div>



                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Tindakan Radiologi</label>
                  <div class="col-sm-10">
                        <select name="cbtindakan" class="form-control select2" style="width: 100%;">
                                    <?php
                                      $qry = mysqli_query($konek,"SELECT * FROM tbl_tindakan"); 
                                      while ($d=mysqli_fetch_array($qry)) { ?>
                                      <option class="form-control" value="<?php echo $d["kode"]; ?>"><?php echo $d['uraian']; ?> 
                                      </option>
                                    <?php } ?>
                        </select>
                  </div>
                </div>

             
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Keterangan</label>
                  <div class="col-sm-10">
                    <textarea name="txtketerangan" class="form-control" rows="3" placeholder="Keterangan"></textarea>
                  </div>
                </div>
                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Kesimpulan</label>
                  <div class="col-sm-10">
                    <textarea name="txtkesimpulan" class="form-control" rows="3" placeholder="Kesimpulan"></textarea>
                  </div>
                </div>
                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Gambar Radiologi</label>
                  <div class="col-sm-10">
                    <input type="file" class="form-control" id="uraian" name="txtgambar" required oninvalid="this.setCustomValidity('Gambar Wajib di Isi')" oninput="setCustomValidity('')" />
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <input type="submit" name="btnsimpan" class="btn btn-primary pull-right" value="Simpan">
              </div>
            </div>
          </form>
            </div>
      </div>
    </div>
  </div>
                           <?php
                              if (isset($_POST["btnsimpan"])){
                                  $txtkode=$_POST['txtkode'];
                                  $cbtindakan=$_POST['cbtindakan'];
                                  $cbruangan=$_POST['cbruangan'];
                                  $cbdokter=$_POST['cbdokter'];
                                  $cbpasien=$_POST['cbpasien'];
                                  $txtkesimpulan=$_POST['txtkesimpulan'];
                                  $txtketerangan=$_POST['txtketerangan'];
                                  $nama_file   = strtolower($_FILES['txtgambar']['name']);
                                  $lokasi_file = $_FILES['txtgambar']['tmp_name'];
                                   $tanggal = date("Y-m-d H:i:s");
   $simpan = mysqli_query($konek,"INSERT INTO tbl_photo(kode,kode_pasien,kode_dokter,kode_tindakan,kode_ruangan,kesimpulan,keterangan,gambar,tanggal) VALUES ('$txtkode','$cbpasien','$cbdokter','$cbtindakan','$cbruangan','$txtkesimpulan','$txtketerangan','$nama_file','$tanggal')");
                            
                              if(!empty($lokasi_file)){
                                move_uploaded_file($lokasi_file, "gambar/radiologi/$nama_file");
                              ?>
                                <?php
                                    echo "<script>alert('Berhasil di Kirim')</script>";
                                echo "<meta http-equiv='refresh' content='0; url=?page=dGFtcGlscmFkaW9sb2dpZGVsaXM='>";
                                    }else{
                                     echo "<script>alert('Gagal di Kirim')</script>";
                                     echo "<meta http-equiv='refresh' content='0; url=?page=dGFtcGlscmFkaW9sb2dpZGVsaXM='>";
                                    }
                                    }
                                ?>