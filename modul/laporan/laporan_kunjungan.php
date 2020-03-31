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

<div class="well well-sm noprint">
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
                <center><H3> LAPORAN PASIEN MASUK RAWAT INAP <br> RS MUJI RAHAYU </H3></center>




                   <table id="customers" width="100%" border="1">
                  <tr>
                      <th>No</th>
                      <th>RM</th>
                      <th>NAMA PASIEN</th>
                      <th>TGL MASUK</th>
                      <th>DOKTER</th>
                      <th>RUANGAN</th>
                      <th>KELAS</th>
                  </tr>


                <?php
                $no = 1;
                  if(isset($_REQUEST['submit'])){
                   $submit = $_REQUEST['submit'];
                   $tgl1 = $_REQUEST['tgl1'];
                   $tgl2 = $_REQUEST['tgl2'];
                      $select = mysqli_query($konek, "select `tbl_kunjungan`.`kode_pasien` AS `kode_pasien`,`tbl_kunjungan`.`kode_dokter` AS `kode_dokter`,`tbl_kunjungan`.`kode_ruangan` AS `kode_ruangan`,`tbl_kunjungan`.`kode` AS `kode`,`tbl_kunjungan`.`kode_bayar` AS `kode_bayar`,`tbl_kunjungan`.`kode_kelas` AS `kode_kelas`,`tbl_kunjungan`.`kode_icd` AS `kode_icd`,`tbl_kunjungan`.`kode_rujukan` AS `kode_rujukan`,`tbl_kunjungan`.`tgl_masuk` AS `tgl_masuk`,`tbl_kunjungan`.`tgl_keluar` AS `tgl_keluar`,`tbl_kunjungan`.`keluhan` AS `keluhan`,`tbl_kunjungan`.`jenis_rawat` AS `jenis_rawat`,`tbl_kunjungan`.`status` AS `status`,`tbl_ruangan`.`ruangan` AS `ruangan`,`tbl_pasien`.`nama` AS `pasien`,`tbl_kunjungan`.`kode_pulang` AS `kode_pulang`,`tbl_pegawai`.`nama` AS `dokter`,`tbl_bed`.`uraian` AS `kelas` from ((((`tbl_kunjungan` join `tbl_ruangan` on((`tbl_ruangan`.`kode` = `tbl_kunjungan`.`kode_ruangan`))) join `tbl_pasien` on((`tbl_pasien`.`kode` = `tbl_kunjungan`.`kode_pasien`))) join `tbl_pegawai` on((`tbl_pegawai`.`kode` = `tbl_kunjungan`.`kode_dokter`))) join `tbl_bed` on((`tbl_bed`.`kode` = `tbl_kunjungan`.`kode_kelas`))) WHERE tgl_masuk BETWEEN '$tgl1' AND '$tgl2'");

                        }else {
                           $select = mysqli_query($konek,"select `tbl_kunjungan`.`kode_pasien` AS `kode_pasien`,`tbl_kunjungan`.`kode_dokter` AS `kode_dokter`,`tbl_kunjungan`.`kode_ruangan` AS `kode_ruangan`,`tbl_kunjungan`.`kode` AS `kode`,`tbl_kunjungan`.`kode_bayar` AS `kode_bayar`,`tbl_kunjungan`.`kode_kelas` AS `kode_kelas`,`tbl_kunjungan`.`kode_icd` AS `kode_icd`,`tbl_kunjungan`.`kode_rujukan` AS `kode_rujukan`,`tbl_kunjungan`.`tgl_masuk` AS `tgl_masuk`,`tbl_kunjungan`.`tgl_keluar` AS `tgl_keluar`,`tbl_kunjungan`.`keluhan` AS `keluhan`,`tbl_kunjungan`.`jenis_rawat` AS `jenis_rawat`,`tbl_kunjungan`.`status` AS `status`,`tbl_ruangan`.`ruangan` AS `ruangan`,`tbl_pasien`.`nama` AS `pasien`,`tbl_kunjungan`.`kode_pulang` AS `kode_pulang`,`tbl_pegawai`.`nama` AS `dokter`,`tbl_bed`.`uraian` AS `kelas` from ((((`tbl_kunjungan` join `tbl_ruangan` on((`tbl_ruangan`.`kode` = `tbl_kunjungan`.`kode_ruangan`))) join `tbl_pasien` on((`tbl_pasien`.`kode` = `tbl_kunjungan`.`kode_pasien`))) join `tbl_pegawai` on((`tbl_pegawai`.`kode` = `tbl_kunjungan`.`kode_dokter`))) join `tbl_bed` on((`tbl_bed`.`kode` = `tbl_kunjungan`.`kode_kelas`)))");
                           }
                         
                        if(mysqli_num_rows($select)){
                            while ($data=mysqli_fetch_array($select)){
                    ?>


                  


                  <tr>
                   <td><?php echo $no++; ?></td>
                    <td><?php echo $data['kode_pasien']; ?></td>
                    <td><?php echo $data['pasien']; ?></td>
                    <td><?php echo $data['tgl_masuk']; ?></td>
                    <td><?php echo $data['dokter']; ?></td>
                    <td><?php echo $data['ruangan']; ?></td>
                    <td><?php echo $data['kelas']; ?></td>
                  </tr>
             


                 <?php }}else{
        echo "Tidak di temukan";}
    ?>
       </table>

    <!-- <small><?php echo $tgl1; ?> & <?php echo $tgl2; ?> </small></h2><hr> -->

               
                
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

