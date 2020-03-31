<?php
 error_reporting(0);
?>

<script>
function printContent(el){
    var restorepage = document.body.innerHTML;
    var printcontent = document.getElementById(el).innerHTML;
    document.body.innerHTML = printcontent;
    window.print();
    document.body.innerHTML = restorepage;
}
</script>


<div class="col-md-12">    
          <div class="box box-info">
            <!-- <div class="box-header with-border"> -->
              <div class="modal-content">
              <div class="modal-header">
                 <button class="btn btn-primary large fa fa-print" onclick="printContent('cetak_report')"> Print</button>

                <!-- <h4 class="modal-title">Hasil Radiologi</h4> -->
              </div>

<!-- <div class="well well-sm noprint">
  <form class="form-inline" role="form" method="post" action="">
    <div class="form-group">
      <label class="sr-only" for="tgl1">Mulai</label>
      <input type="date" class="form-control" id="tgl1" name="tgl1" required>
    </div>
    <div class="form-group">
      <label class="sr-only" for="tgl2">Hingga</label>
      <input type="date" class="form-control" id="tgl2" name="tgl2" required>
    </div>
    <button type="submit" name="submit" class="btn btn-success">Tampilkan</button>
  </form>
  </div>
 -->

              
              <div class="modal-body" id="cetak_report">
                       <style type="text/css">
                      #customers {
                        font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
                        border-collapse: collapse;
                        width: 100%;
                      }

                      #customers td, #customers th {
                        border: 1px solid #ddd;
                        padding: 8px;
                      }

                      #customers tr:nth-child(even){background-color: #f2f2f2;}

                      #customers tr:hover {background-color: #ddd;}

                      #customers th {
                        padding-top: 12px;
                        padding-bottom: 12px;
                        text-align: left;
                       background-color: blue;
                        color: white;
                      }
                      </style>
                </style>
                <center><H3> LAPORAN DOKTER <br> RS MUJI RAHAYU </H3></center>




                   <table id="customers" width="100%" border="1">
                  <tr>
                    <th width="4%" align="center">NO</th>
                    <th>NIP</th>
                    <th>NAMA</th>
                    <th>TGL LAHIR</th>
                     <th>HANDPHONE</th>
                    <th>EMAIL</th>
                    <th>SPESIALIS</th>
                    <th>JABATAN</th>
                    <th>KETERANGAN</th>
                  </tr>


                <?php
                $no = 1;
                  if(isset($_REQUEST['submit'])){
                   $submit = $_REQUEST['submit'];
                   $tgl1 = $_REQUEST['tgl1'];
                   $tgl2 = $_REQUEST['tgl2'];
                      $select = mysqli_query($konek, "select `tbl_pegawai`.`kode` AS `kode`,`tbl_pegawai`.`kode_spesialis` AS `kode_spesialis`,`tbl_pegawai`.`kode_pekerjaan` AS `kode_pekerjaan`,`tbl_pegawai`.`kode_pendidikan` AS `kode_pendidikan`,`tbl_pegawai`.`kode_jabatan` AS `kode_jabatan`,`tbl_pegawai`.`nip` AS `nip`,`tbl_pegawai`.`nama` AS `nama`,`tbl_pegawai`.`tempat_lahir` AS `tempat_lahir`,`tbl_pegawai`.`tgl_lahir` AS `tgl_lahir`,`tbl_pegawai`.`jenis_kelamin` AS `jenis_kelamin`,`tbl_pegawai`.`email` AS `email`,`tbl_pegawai`.`handphone` AS `handphone`,`tbl_pegawai`.`password` AS `password`,`tbl_pegawai`.`keterangan` AS `keterangan`,`tbl_pegawai`.`gambar` AS `gambar`,`tbl_pegawai`.`hari_senin` AS `hari_senin`,`tbl_pegawai`.`hari_selasa` AS `hari_selasa`,`tbl_pegawai`.`hari_rabu` AS `hari_rabu`,`tbl_pegawai`.`hari_kamis` AS `hari_kamis`,`tbl_pegawai`.`hari_jumat` AS `hari_jumat`,`tbl_pegawai`.`hari_sabtu` AS `hari_sabtu`,`tbl_pegawai`.`hari_minggu` AS `hari_minggu`,`tbl_pegawai`.`tgl_update` AS `tgl_update`,`tbl_pekerjaan`.`uraian` AS `pekerjaan`,`tbl_pendidikan`.`uraian` AS `pendidikan`,`tbl_spesialis`.`uraian` AS `spesialis`,`tbl_jabatan`.`uraian` AS `jabatan` from ((((`tbl_jabatan` join `tbl_pegawai` on((`tbl_pegawai`.`kode_jabatan` = `tbl_jabatan`.`kode`))) join `tbl_pendidikan` on((`tbl_pegawai`.`kode_pendidikan` = `tbl_pendidikan`.`kode`))) join `tbl_pekerjaan` on((`tbl_pegawai`.`kode_pekerjaan` = `tbl_pekerjaan`.`kode`))) join `tbl_spesialis` on((`tbl_pegawai`.`kode_spesialis` = `tbl_spesialis`.`kode`))) where ((`tbl_jabatan`.`uraian` = 'Dokter Umum') or (`tbl_jabatan`.`uraian` = 'Dokter Spesialis')) order by `tbl_pegawai`.`kode` desc");

                        }else {
                           $select = mysqli_query($konek,"select `tbl_pegawai`.`kode` AS `kode`,`tbl_pegawai`.`kode_spesialis` AS `kode_spesialis`,`tbl_pegawai`.`kode_pekerjaan` AS `kode_pekerjaan`,`tbl_pegawai`.`kode_pendidikan` AS `kode_pendidikan`,`tbl_pegawai`.`kode_jabatan` AS `kode_jabatan`,`tbl_pegawai`.`nip` AS `nip`,`tbl_pegawai`.`nama` AS `nama`,`tbl_pegawai`.`tempat_lahir` AS `tempat_lahir`,`tbl_pegawai`.`tgl_lahir` AS `tgl_lahir`,`tbl_pegawai`.`jenis_kelamin` AS `jenis_kelamin`,`tbl_pegawai`.`email` AS `email`,`tbl_pegawai`.`handphone` AS `handphone`,`tbl_pegawai`.`password` AS `password`,`tbl_pegawai`.`keterangan` AS `keterangan`,`tbl_pegawai`.`gambar` AS `gambar`,`tbl_pegawai`.`hari_senin` AS `hari_senin`,`tbl_pegawai`.`hari_selasa` AS `hari_selasa`,`tbl_pegawai`.`hari_rabu` AS `hari_rabu`,`tbl_pegawai`.`hari_kamis` AS `hari_kamis`,`tbl_pegawai`.`hari_jumat` AS `hari_jumat`,`tbl_pegawai`.`hari_sabtu` AS `hari_sabtu`,`tbl_pegawai`.`hari_minggu` AS `hari_minggu`,`tbl_pegawai`.`tgl_update` AS `tgl_update`,`tbl_pekerjaan`.`uraian` AS `pekerjaan`,`tbl_pendidikan`.`uraian` AS `pendidikan`,`tbl_spesialis`.`uraian` AS `spesialis`,`tbl_jabatan`.`uraian` AS `jabatan` from ((((`tbl_jabatan` join `tbl_pegawai` on((`tbl_pegawai`.`kode_jabatan` = `tbl_jabatan`.`kode`))) join `tbl_pendidikan` on((`tbl_pegawai`.`kode_pendidikan` = `tbl_pendidikan`.`kode`))) join `tbl_pekerjaan` on((`tbl_pegawai`.`kode_pekerjaan` = `tbl_pekerjaan`.`kode`))) join `tbl_spesialis` on((`tbl_pegawai`.`kode_spesialis` = `tbl_spesialis`.`kode`))) where ((`tbl_jabatan`.`uraian` = 'Dokter Umum') or (`tbl_jabatan`.`uraian` = 'Dokter Spesialis')) order by `tbl_pegawai`.`kode` desc");
                           }
                         
                        if(mysqli_num_rows($select)){
                            while ($data=mysqli_fetch_array($select)){
                    ?>


                  


                  <tr>
                    <td align="center"><?php echo $no++; ?></td>
                    <td><?php echo $data['nip']; ?></td>
                    <td><?php echo $data['nama']; ?></td>
                     <td><?php echo $data['tgl_lahir']; ?></td>
                      <td><?php echo $data['handphone']; ?></td>
                       <td><?php echo $data['email']; ?></td>
                        <td><?php echo $data['spesialis']; ?></td>
                         <td><?php echo $data['jabatan']; ?></td>
                          <td><?php echo $data['keterangan']; ?></td>
                  </tr>
             


                 <?php }}else{
        echo "Tidak di temukan";}
    ?>
       </table>

    <!-- <small><?php echo $tgl1; ?> & <?php echo $tgl2; ?> </small></h2><hr> -->

               
                  <BR>
                  <bR>
                  <p align="right">
                    <td></td>
                    <td>Diketahui Oleh <br> Pimpinan RS MUJI RAHAYU
                    <br><br><br><br>
                    
                    ________________________
                    </td>
                 
                 
                </p>
              </div>
             
            </div>
       
            </div>
      <!-- </div> -->
          </div>
    </div>

