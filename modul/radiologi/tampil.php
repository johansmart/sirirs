<?php error_reporting(0);
?>
      <div class="col-md-12">    
          <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">DAFTAR RADIOLOGI</h3>   
            </div>
               <div class="box-body table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>RM</th>
                  <th>NAMA</th>
                  <th>DOKTER</th>
                  <th>RUANGAN</th>
                  <th>AKSI</th>
                </tr>
                </thead>
                <tbody>

                  <?php
                            // $no =1;
                              $qry = mysqli_query($konek,"select `tbl_photo`.`kode` AS `kode`,`tbl_photo`.`kode_pasien` AS `kode_pasien`,`tbl_photo`.`kode_dokter` AS `kode_dokter`,`tbl_photo`.`kode_tindakan` AS `kode_tindakan`,`tbl_photo`.`kode_ruangan` AS `kode_ruangan`,`tbl_photo`.`kesimpulan` AS `kesimpulan`,`tbl_photo`.`keterangan` AS `keterangan`,`tbl_photo`.`tanggal` AS `tanggal`,`tbl_photo`.`gambar` AS `gambar`,`tbl_ruangan`.`ruangan` AS `ruangan`,`tbl_tindakan`.`uraian` AS `tindakan`,`tbl_pasien`.`nama` AS `pasien`,`tbl_pegawai`.`nama` AS `dokter` from ((((`tbl_photo` join `tbl_pasien` on((`tbl_pasien`.`kode` = `tbl_photo`.`kode_pasien`))) join `tbl_pegawai` on((`tbl_pegawai`.`kode` = `tbl_photo`.`kode_dokter`))) join `tbl_ruangan` on((`tbl_ruangan`.`kode` = `tbl_photo`.`kode_ruangan`))) join `tbl_tindakan` on((`tbl_tindakan`.`kode` = `tbl_photo`.`kode_tindakan`)))");
                                while ($data=mysqli_fetch_array($qry)) {
                          ?>
                    <tr>
                        <!-- <td><?php echo $no++; ?></td> -->
                        <td><?php echo $data['kode_pasien']; ?></td>
                        <td><?php echo $data['pasien']; ?></td>
                        <td><?php echo $data['dokter']; ?></td>
                        <td><?php echo $data['ruangan']; ?></td>
                       <td> <a href="beranda.php?page=cmFkaW9sb2dpdXBkYXRlZGF0YQ==&id=<?php echo base64_encode($data['kode']); ?>" class="fa fa-edit">Edit</a> |
                        <a onClick="return confirm('Yakin untuk di Hapus ?')" href="beranda.php?page=dGFtcGlscmFkaW9sb2dpZGVsaXM=&hapus=<?php echo $data['kode']; ?>" class="fa fa-eraser">Hapus</a> |
                         <a href="beranda.php?page=detail&id=<?php echo base64_encode($data['kode']); ?>" class="fa fa-list">Detail</a>

                      </td>
                    </tr>
                  <?php } ?>
                  </tfoot>
              </table>
                </div>
              </div>

    </div>
  </div>



<?php
if (isset($_GET[hapus])){
  $qry=mysqli_query($konek,"delete from tbl_photo where kode='".$_GET["hapus"]."'");
  if ($qry){
    echo "<script>alert('Data Berhasil di Hapus')</script>";
        echo "<meta http-equiv='refresh' content='0; url=?page=dGFtcGlscmFkaW9sb2dpZGVsaXM='>";
    } else {
        Echo "Gagal di Hapus".mysqli_error();
        echo "<meta http-equiv='refresh' content='0; url=?page=dGFtcGlscmFkaW9sb2dpZGVsaXM='>";
    }
  }
?>