  <?php
  error_reporting(0); 
  ?>
        <!-- UNTUK MODAL -->
        <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Input Data Dokter</h4>
              </div>
               <form class="form-horizontal" method="POST" action="">
              <div class="modal-body">
                 <!-- AWAL COMBOX FAKULTAS -->
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Spesialis</label>
                  <div class="col-sm-10">
                        <select name="cbfakultas" class="form-control select2" style="width: 100%;">
                                    <?php
                                      $qry = mysqli_query($konek,"SELECT * FROM tbl_spesialis"); 
                                      while ($d=mysqli_fetch_array($qry)) { ?>
                                      <option class="form-control" value="<?php echo $d["kode"]; ?>"><?php echo $d['uraian']; ?>
                                      </option>
                                    <?php } ?>
                        </select>
                  </div>
                </div>
                 <!-- AKHIR -->

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Dokter</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="uraian" name="txturaian" placeholder="Nama Dokter" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary pull-left" data-dismiss="modal">Close</button>
                <input type="submit" name="btnsimpan" class="btn btn-primary pull-right" value="Simpan">
              </div>
            </div>
          </form>
          </div>
        </div>
      <!-- AKHIR MODAL -->
 
                     <?php
                              if (isset($_POST["btnsimpan"])){
                                $txturaian =$_POST['txturaian'];
                                $cbfakultas =$_POST['cbfakultas'];
                                  $simpan = mysqli_query($konek,"INSERT INTO tbl_dokter (nama,kode_spesialis) VALUES ('$txturaian','$cbfakultas')");
                                if ($simpan){
                                  ?>
                                  <script type="text/javascript">
                                    document.location.href="beranda.php?page=dGFtYmFoZG9rdGVycmFhZA==";
                                  </script>
                                  <?php
                                }else{
                                 echo "<script>alert('Data Anda Gagal di simpan')</script>";
                                 echo "<meta http-equiv='refresh' content='0; url=?page=dGFtYmFoZG9rdGVycmFhZA=='>";
                                }
                                }
                                ?>
<!-- Untuk Tabel  -->
      <div class="col-md-12">    
          <div class="box box-info">
            <div class="box-header with-border">
              <a class="btn btn-app"  data-toggle="modal" data-target="#modal-default">
                <i class="fa fa-edit"></i>Tambah Data
              </a>
                <h3 class="box-title">Daftar Dokter</h3>   
            </div>
               <div class="box-body table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>NO</th>
                  <th>DOKTER</th>
                  <th>SPESIALIS</th>
                  <th>EDIT</th>
                  <th>HAPUS</th>
                </tr>
                </thead>
                <tbody>

                  <?php
                            $no =1;
                              $qry = mysqli_query($konek,"select `tbl_dokter`.`kode` AS `kode`,`tbl_dokter`.`kode_spesialis` AS `kode_spesialis`,`tbl_dokter`.`nama` AS `nama`,`tbl_spesialis`.`uraian` AS `uraian` from (`tbl_spesialis` join `tbl_dokter` on((`tbl_spesialis`.`kode` = `tbl_dokter`.`kode_spesialis`))) order by `tbl_spesialis`.`kode`");
                                while ($data=mysqli_fetch_array($qry)) {
                          ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $data['nama']; ?></td>
                        <td><?php echo $data['uraian']; ?></td>
                       <td> <a href="beranda.php?page=dWJhaGRhdGFkb2t0ZXI=&id=<?php echo base64_encode($data['kode']); ?>" class="fa fa-edit">Edit</a></td>
                       <td> <a onClick="return confirm('Yakin Anda Menghapus ?')" href="beranda.php?page=dGFtYmFoZG9rdGVycmFhZA==&hapus=<?php echo $data['kode']; ?>" class="fa fa-eraser">Hapus</a></td>
                    </tr>
                  <?php } ?>
                  </tfoot>
              </table>
                </div>
              </div>

    </div>
  </div>


<!-- Coding untuk Hapus -->
<?php
if (isset($_GET[hapus])){
  $qry=mysqli_query($konek,"delete from tbl_dokter where kode='".$_GET["hapus"]."'");
  if ($qry){
    echo "<script>alert('Data Berhasil di Hapus')</script>";
        echo "<meta http-equiv='refresh' content='0; url=?page=dGFtYmFoZG9rdGVycmFhZA=='>";
    } else {
        Echo "Gagal di Hapus".mysqli_error();
        echo "<meta http-equiv='refresh' content='0; url=?page=dGFtYmFoZG9rdGVycmFhZA=='>";
    }
  }
?>
   
<!-- akhir hapus -->




<!-- KOLOM UNTUK ICON -->



<!-- 
  <label for="exampleInputEmail1">Email address</label>
                  <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                <input type="email" class="form-control" placeholder="Email">
              </div>
               -->