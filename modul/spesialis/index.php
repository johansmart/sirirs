  <?php
  error_reporting(0); 
  $carikode = mysqli_query($konek, "select max(kode) from tbl_spesialis") or die (mysql_error());
  $datakode = mysqli_fetch_array($carikode);
  if ($datakode) {
   $nilaikode = substr($datakode[0], 1);
   $kode = (int) $nilaikode;
   $kode = $kode + 1;
   $kode_otomatis = "S".str_pad($kode, 5, "0", STR_PAD_LEFT);
  } else {
   $kode_otomatis = "S00001";
  }
  ?>


           <!-- UNTUK MODAL -->
        <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button> <BR>
                <h4 class="modal-title">FORM SPESIALIS</h4>
              </div>
               <form class="form-horizontal" method="POST" action="">
              <div class="modal-body">


                  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Kode</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="uraian" value="<?php echo $kode_otomatis ?>" name="txtkode" placeholder="Cara Bayar" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                  </div>
                </div>



                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">SPESIALIS</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="uraian" name="txtspesialis" placeholder="Spesialis" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                <input type="submit" name="btnsimpan" class="btn btn-primary pull-right" value="Simpan">
              </div>
            </div>
          </form>
          </div>
        </div>
                     <?php
                              if (isset($_POST["btnsimpan"])){
                                $txtspesialis =$_POST['txtspesialis'];
                                 $txtkode =$_POST['txtkode'];
                                  $simpan = mysqli_query($konek,"INSERT INTO tbl_spesialis (kode,uraian) VALUES ('$txtkode','$txtspesialis')");
                                if ($simpan){
                                  ?>
                                  <script type="text/javascript">
                                    document.location.href="beranda.php?page=spesialis";
                                  </script>
                                  <?php
                                }else{
                                 echo "<script>alert('Data Anda Gagal di simpan')</script>";
                                 echo "<meta http-equiv='refresh' content='0; url=?page=spesialis'>";
                                }
                                }
                                ?>

  <div class="col-md-12">    
          <div class="box box-info">
            <div class="box-header with-border">
              <a class="btn btn-app"  data-toggle="modal" data-target="#modal-default">
                <i class="fa fa-edit"></i>Tambah Data
              </a>
                <h3 class="box-title">DAFTAR SPESIALIS</h3>   
            </div>
               <div class="box-body table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>NO</th>
                  <th>KODE</th>
                  <th>SPESIALIS</th>
                  
                  <th width="10">EDIT</th>
                  <th width="10">HAPUS</th>
                </tr>
                </thead>
                <tbody>

                  <?php
                            $no =1;
                              $qry = mysqli_query($konek,"SELECT * FROM tbl_spesialis order by uraian asc");
                                while ($data=mysqli_fetch_array($qry)) {
                          ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                          <td><?php echo $data['kode']; ?></td>
                        <td><?php echo $data['uraian']; ?></td>
                        
                       <td> <a href="beranda.php?page=edit_spesialis&id=<?php echo base64_encode($data['kode']); ?>" class="fa fa-edit">Edit</a></td>
                       <td> <a onClick="return confirm('Yakin Anda Menghapus ?')" href="beranda.php?page=spesialis&hapus=<?php echo $data['kode']; ?>" class="fa fa-eraser">Hapus</a></td>
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
  $qry=mysqli_query($konek,"delete from tbl_spesialis where kode='".$_GET["hapus"]."'");
  if ($qry){
    echo "<script>alert('Data Berhasil di Hapus')</script>";
        echo "<meta http-equiv='refresh' content='0; url=?page=spesialis'>";
    } else {
        Echo "Gagal di Hapus".mysqli_error();
        echo "<meta http-equiv='refresh' content='0; url=?page=spesialis'>";
    }
  }
?>
