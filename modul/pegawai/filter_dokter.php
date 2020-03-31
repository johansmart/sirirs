  <?php
  error_reporting(0); 
  ?>
  </div>
  <div class="box">
            <div class="box-header">
              <h3 class="box-title">DAFTAR DOKTER</h3>
            </div>
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
                    $qry = mysqli_query($konek,"select `tbl_pegawai`.`kode` AS `kode`,`tbl_pegawai`.`kode_spesialis` AS `kode_spesialis`,`tbl_pegawai`.`kode_pekerjaan` AS `kode_pekerjaan`,`tbl_pegawai`.`kode_pendidikan` AS `kode_pendidikan`,`tbl_pegawai`.`kode_jabatan` AS `kode_jabatan`,`tbl_pegawai`.`nip` AS `nip`,`tbl_pegawai`.`nama` AS `nama`,`tbl_pegawai`.`tempat_lahir` AS `tempat_lahir`,`tbl_pegawai`.`tgl_lahir` AS `tgl_lahir`,`tbl_pegawai`.`jenis_kelamin` AS `jenis_kelamin`,`tbl_pegawai`.`email` AS `email`,`tbl_pegawai`.`handphone` AS `handphone`,`tbl_pegawai`.`password` AS `password`,`tbl_pegawai`.`keterangan` AS `keterangan`,`tbl_pegawai`.`gambar` AS `gambar`,`tbl_pegawai`.`hari_senin` AS `hari_senin`,`tbl_pegawai`.`hari_selasa` AS `hari_selasa`,`tbl_pegawai`.`hari_rabu` AS `hari_rabu`,`tbl_pegawai`.`hari_kamis` AS `hari_kamis`,`tbl_pegawai`.`hari_jumat` AS `hari_jumat`,`tbl_pegawai`.`hari_sabtu` AS `hari_sabtu`,`tbl_pegawai`.`hari_minggu` AS `hari_minggu`,`tbl_pegawai`.`tgl_update` AS `tgl_update`,`tbl_pekerjaan`.`uraian` AS `pekerjaan`,`tbl_pendidikan`.`uraian` AS `pendidikan`,`tbl_spesialis`.`uraian` AS `spesialis`,`tbl_jabatan`.`uraian` AS `jabatan` from ((((`tbl_jabatan` join `tbl_pegawai` on((`tbl_pegawai`.`kode_jabatan` = `tbl_jabatan`.`kode`))) join `tbl_pendidikan` on((`tbl_pegawai`.`kode_pendidikan` = `tbl_pendidikan`.`kode`))) join `tbl_pekerjaan` on((`tbl_pegawai`.`kode_pekerjaan` = `tbl_pekerjaan`.`kode`))) join `tbl_spesialis` on((`tbl_pegawai`.`kode_spesialis` = `tbl_spesialis`.`kode`))) where (((`tbl_jabatan`.`uraian` = 'Dokter Umum') or (`tbl_jabatan`.`uraian` = 'Dokter Spesialis')) and (`tbl_pegawai`.`keterangan` = 'Aktif')) order by `tbl_pegawai`.`kode` desc");
                    while ($data=mysqli_fetch_array($qry)) {
                ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $data['nip'];?></td>
                  <td><?php echo $data['nama'];?>    <a class="btn btn-danger btn-xs"><?php echo $data['keterangan'];?></a></td>
                  <td><?php echo $data['spesialis'];?></td>
                  <td align="right"> 
                    <a href="beranda.php?page=detail_jadwal&id=<?php echo base64_encode($data['kode']); ?>"><button  class="btn btn-primary fa fa-list"> Detail</button></a>
                    <a href="beranda.php?page=edit_jadwal&id=<?php echo base64_encode($data['kode']); ?>"><button  class="btn btn-primary fa fa-edit">Update Jadwal</button></a>
                    
                </tr>
              <?php } ?>
                </tfoot>
              </table>
            </div>
          </div>
  </section>
  </div>

