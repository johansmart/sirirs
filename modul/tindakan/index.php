  <?php
  error_reporting(0); 
  $carikode = mysqli_query($konek, "select max(kode) from tbl_tindakan") or die (mysql_error());
  $datakode = mysqli_fetch_array($carikode);
  if ($datakode) {
   $nilaikode = substr($datakode[0], 1);
   $kode = (int) $nilaikode;
   $kode = $kode + 1;
   $kode_otomatis = "T".str_pad($kode, 5, "0", STR_PAD_LEFT);
  } else {
   $kode_otomatis = "T00001";
  }



  ?>

           <!-- UNTUK MODAL -->
        <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button> <BR>
                <h4 class="modal-title">INPUT TINDAKAN</h4>
              </div>
               <form class="form-horizontal" method="POST" action="">


           
              <div class="modal-body">
                  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Kode</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="uraian" value="<?php echo $kode_otomatis ?>" name="txtkode" placeholder="Kode" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Uraian</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="uraian" name="txturaian" placeholder="Uraian" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                  </div>
                </div>


                  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Harga</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" id="uraian" name="txtharga" placeholder="Harga" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                  </div>
                </div>

             <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Keterangan</label>
                  <div class="col-sm-10">
                        <select name="txtketerangan" class="form-control select2" style="width: 100%;">
                         <option class="form-control" value="INAP">INAP</option>
                         <option class="form-control" value="JALAN">JALAN</option>
                        </select>
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
                                $txtkode =$_POST['txtkode'];
                                $txturaian =$_POST['txturaian'];
                                $txtharga =$_POST['txtharga'];
                                $txtketerangan =$_POST['txtketerangan'];
                                  $simpan = mysqli_query($konek,"INSERT INTO tbl_tindakan (kode,uraian,harga,keterangan) VALUES ('$txtkode','$txturaian','$txtharga','$txtketerangan')");
                                if ($simpan){
                                  ?>
                                  <script type="text/javascript">
                                    document.location.href="beranda.php?page=tindakan";
                                  </script>
                                  <?php
                                }else{
                                 echo "<script>alert('Data Anda Gagal di simpan')</script>";
                                 echo "<meta http-equiv='refresh' content='0; url=?page=tindakan'>";
                                }
                                }
                                ?>

  <div class="col-md-12">    
          <div class="box box-info">
            <div class="box-header with-border">
              <a class="btn btn-app"  data-toggle="modal" data-target="#modal-default">
                <i class="fa fa-edit"></i>Tambah Data
              </a>
               <br>
                <h3 class="box-title">DAFTAR TINDAKAN</h3>   
            </div>
               <div class="box-body table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                
                  <th>NO</th>
                  <th>URAIAN TINDAKAN</th>
                  <th>HARGA</th>
                  <th>KETERANGAN</th>
                  <th width="20">ACTION</th>
                </tr>
                </thead>
                <tbody>

                  <?php
                            $no =1;
                              $qry = mysqli_query($konek,"SELECT * FROM tbl_tindakan order by uraian asc");
                                while ($data=mysqli_fetch_array($qry)) {
                          ?>
                    <tr>

                         <td><?php echo $no++; ?></td>
                        <td><?php echo $data['uraian']; ?></td>
                        <td><?php echo $data['harga']; ?></td>
                        <td><?php echo $data['keterangan']; ?></td> 
                       <td width="20%"> <a href="beranda.php?page=edit_tindakan&id=<?php echo base64_encode($data['kode']); ?>" class="fa fa-edit">Edit</a> | 
                       <a onClick="return confirm('Yakin Anda Menghapus ?')" href="beranda.php?page=tindakan&hapus=<?php echo $data['kode']; ?>" class="fa fa-eraser">Hapus</a></td>
                    </tr>
                  <?php } ?>
                  </tfoot>
              </table>
                </div>
              </div>

    </div>
  </div>

<!-- Coding Untuk Hapus data -->
<?php
if (isset($_GET[hapus])){
  $qry=mysqli_query($konek,"delete from tbl_tindakan where kode='".$_GET["hapus"]."'");
  if ($qry){
    echo "<script>alert('Data Berhasil di Hapus')</script>";
        echo "<meta http-equiv='refresh' content='0; url=?page=tindakan'>";
    } else {
        Echo "Gagal di Hapus".mysqli_error();
        echo "<meta http-equiv='refresh' content='0; url=?page=tindakan'>";
    }
  }
?>
