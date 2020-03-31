        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-aqua">
        <?php
          $dokter = mysqli_query($konek,"select `tbl_pegawai`.`kode` AS `kode`,`tbl_pegawai`.`kode_spesialis` AS `kode_spesialis`,`tbl_pegawai`.`kode_pekerjaan` AS `kode_pekerjaan`,`tbl_pegawai`.`kode_pendidikan` AS `kode_pendidikan`,`tbl_pegawai`.`kode_jabatan` AS `kode_jabatan`,`tbl_pegawai`.`nip` AS `nip`,`tbl_pegawai`.`nama` AS `nama`,`tbl_pegawai`.`tempat_lahir` AS `tempat_lahir`,`tbl_pegawai`.`tgl_lahir` AS `tgl_lahir`,`tbl_pegawai`.`jenis_kelamin` AS `jenis_kelamin`,`tbl_pegawai`.`email` AS `email`,`tbl_pegawai`.`handphone` AS `handphone`,`tbl_pegawai`.`password` AS `password`,`tbl_pegawai`.`keterangan` AS `keterangan`,`tbl_pegawai`.`gambar` AS `gambar`,`tbl_pegawai`.`hari_senin` AS `hari_senin`,`tbl_pegawai`.`hari_selasa` AS `hari_selasa`,`tbl_pegawai`.`hari_rabu` AS `hari_rabu`,`tbl_pegawai`.`hari_kamis` AS `hari_kamis`,`tbl_pegawai`.`hari_jumat` AS `hari_jumat`,`tbl_pegawai`.`hari_sabtu` AS `hari_sabtu`,`tbl_pegawai`.`hari_minggu` AS `hari_minggu`,`tbl_pegawai`.`tgl_update` AS `tgl_update`,`tbl_pekerjaan`.`uraian` AS `pekerjaan`,`tbl_pendidikan`.`uraian` AS `pendidikan`,`tbl_spesialis`.`uraian` AS `spesialis`,`tbl_jabatan`.`uraian` AS `jabatan` from ((((`tbl_jabatan` join `tbl_pegawai` on((`tbl_pegawai`.`kode_jabatan` = `tbl_jabatan`.`kode`))) join `tbl_pendidikan` on((`tbl_pegawai`.`kode_pendidikan` = `tbl_pendidikan`.`kode`))) join `tbl_pekerjaan` on((`tbl_pegawai`.`kode_pekerjaan` = `tbl_pekerjaan`.`kode`))) join `tbl_spesialis` on((`tbl_pegawai`.`kode_spesialis` = `tbl_spesialis`.`kode`))) where (((`tbl_jabatan`.`uraian` = 'Dokter Umum') or (`tbl_jabatan`.`uraian` = 'Dokter Spesialis')) and (`tbl_pegawai`.`keterangan` = 'Aktif')) order by `tbl_pegawai`.`kode` desc");
          $total_dokter = mysqli_num_rows($dokter);
        ?>
            <div class="inner">
              <h3><?php echo $total_dokter; ?></h3>
              <p>JUMLAH DOKTER</p>
            </div>
            <div class="icon">
                <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer"><i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
       
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
        <?php
          $ruangan = mysqli_query($konek,"SELECT * FROM tbl_pasien");
          $pasien = mysqli_num_rows($ruangan);
        ?>
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php echo $pasien;?> </h3>

              <p>JUMLAH REGISTRASI PASIEN</p>
            </div>
            <div class="icon">
              <i class="fa fa-home"></i>
            </div>
            <a href="#" class="small-box-footer"><i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
        <?php
          $spesialis = mysqli_query($konek,"SELECT * FROM tbl_spesialis");
          $total_spesialis = mysqli_num_rows($spesialis);
        ?>

          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php echo $total_spesialis;?> </h3>

              <p>JUMLAH SPESIALIS</p>
            </div>
            <div class="icon">
               <i class="fa fa-eye"></i>
            </div>
            <a href="#" class="small-box-footer"> <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        

       
    <div class="col-lg-3 col-xs-6">
        <?php
          $spesialis = mysqli_query($konek,"select `tbl_pegawai`.`kode` AS `kode`,`tbl_pegawai`.`kode_spesialis` AS `kode_spesialis`,`tbl_pegawai`.`kode_pekerjaan` AS `kode_pekerjaan`,`tbl_pegawai`.`kode_pendidikan` AS `kode_pendidikan`,`tbl_pegawai`.`kode_jabatan` AS `kode_jabatan`,`tbl_pegawai`.`nip` AS `nip`,`tbl_pegawai`.`nama` AS `nama`,`tbl_pegawai`.`tempat_lahir` AS `tempat_lahir`,`tbl_pegawai`.`tgl_lahir` AS `tgl_lahir`,`tbl_pegawai`.`jenis_kelamin` AS `jenis_kelamin`,`tbl_pegawai`.`email` AS `email`,`tbl_pegawai`.`handphone` AS `handphone`,`tbl_pegawai`.`password` AS `password`,`tbl_pegawai`.`keterangan` AS `keterangan`,`tbl_pegawai`.`gambar` AS `gambar`,`tbl_pegawai`.`hari_senin` AS `hari_senin`,`tbl_pegawai`.`hari_selasa` AS `hari_selasa`,`tbl_pegawai`.`hari_rabu` AS `hari_rabu`,`tbl_pegawai`.`hari_kamis` AS `hari_kamis`,`tbl_pegawai`.`hari_jumat` AS `hari_jumat`,`tbl_pegawai`.`hari_sabtu` AS `hari_sabtu`,`tbl_pegawai`.`hari_minggu` AS `hari_minggu`,`tbl_pegawai`.`tgl_update` AS `tgl_update`,`tbl_pekerjaan`.`uraian` AS `pekerjaan`,`tbl_pendidikan`.`uraian` AS `pendidikan`,`tbl_spesialis`.`uraian` AS `spesialis`,`tbl_jabatan`.`uraian` AS `jabatan` from ((((`tbl_jabatan` join `tbl_pegawai` on((`tbl_pegawai`.`kode_jabatan` = `tbl_jabatan`.`kode`))) join `tbl_pendidikan` on((`tbl_pegawai`.`kode_pendidikan` = `tbl_pendidikan`.`kode`))) join `tbl_pekerjaan` on((`tbl_pegawai`.`kode_pekerjaan` = `tbl_pekerjaan`.`kode`))) join `tbl_spesialis` on((`tbl_pegawai`.`kode_spesialis` = `tbl_spesialis`.`kode`))) where ((`tbl_jabatan`.`uraian` = 'Pegawai Tetap') and (`tbl_pegawai`.`keterangan` = 'Aktif')) order by `tbl_pegawai`.`kode` desc");
          $pegawai_tetap = mysqli_num_rows($spesialis);
        ?>

          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php echo $pegawai_tetap;?> </h3>

              <p>JUMLAH PEGAWAI TETAP</p>
            </div>
            <div class="icon">
               <i class="fa fa-users"></i>
            </div>
            <a href="#" class="small-box-footer"> <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

      </div>
    

  

