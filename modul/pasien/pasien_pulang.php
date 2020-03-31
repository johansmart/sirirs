
<!-- Untuk Tabel  -->
  
  </div>

<!--AWAL UNTUK DATA TABEL  -->
<div class="box">
            <div class="box-header">
              <h3 class="box-title">DAFTAR PASIEN PULANG</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
              <!-- <div class="box-body table-responsive no-padding"> -->
               <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>NO</th>
                  <th>REKAM MEDIS & NAMA PASIEN</th>
                  <th>RUANGAN / STATUS</th>
                  <th>TGL MASUK / TGL KELUAR</th>
                  <th align="right">ACTION</th>
                </tr>
                </thead>
                <tbody>
                <?php
                    $no =1;
                    $qry = mysqli_query($konek,"select `tbl_kunjungan`.`kode_pasien` AS `kode_pasien`,`tbl_kunjungan`.`kode_dokter` AS `kode_dokter`,`tbl_kunjungan`.`kode_ruangan` AS `kode_ruangan`,`tbl_kunjungan`.`kode` AS `kode`,`tbl_kunjungan`.`kode_bayar` AS `kode_bayar`,`tbl_kunjungan`.`kode_kelas` AS `kode_kelas`,`tbl_kunjungan`.`kode_icd` AS `kode_icd`,`tbl_kunjungan`.`kode_rujukan` AS `kode_rujukan`,`tbl_kunjungan`.`tgl_masuk` AS `tgl_masuk`,`tbl_kunjungan`.`tgl_keluar` AS `tgl_keluar`,`tbl_kunjungan`.`keluhan` AS `keluhan`,`tbl_kunjungan`.`jenis_rawat` AS `jenis_rawat`,`tbl_kunjungan`.`status` AS `status`,`tbl_ruangan`.`ruangan` AS `ruangan`,`tbl_pasien`.`nama` AS `pasien`,`tbl_kunjungan`.`kode_pulang` AS `kode_pulang` from ((`tbl_kunjungan` join `tbl_ruangan` on((`tbl_ruangan`.`kode` = `tbl_kunjungan`.`kode_ruangan`))) join `tbl_pasien` on((`tbl_pasien`.`kode` = `tbl_kunjungan`.`kode_pasien`))) WHERE status='Pasien Pulang'");
                    while ($data=mysqli_fetch_array($qry)) {
                ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $data['kode_pasien'];?> - <?php echo $data['pasien'];?>    </td>
                  <td><?php echo $data['ruangan'];?> <a class="btn btn-danger btn-xs"><?php echo $data['status'];?></td>
                  <td><?php echo $data['tgl_masuk'];?> s/d  <?php echo $data['tgl_keluar'];?> </a></td>
                  <td align="right"> 
                   
                    <a href="beranda.php?page=cetak_ulang&id=<?php echo base64_encode($data['kode']); ?>"><button  class="btn btn-warning fa fa-send"> Buka Ulang</button></a>
                </tr>
              <?php } ?>
                </tfoot>
              </table>
              
            </div>
            <!-- /.box-body -->
          </div>
