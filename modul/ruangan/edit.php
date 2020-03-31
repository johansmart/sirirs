<?php
$id = base64_decode($_GET["id"]);
$sqlku = mysqli_query($konek,"SELECT * FROM tbl_ruangan WHERE kode='$id'");
$data  = mysqli_fetch_array($sqlku);
?>
<div class="col-md-12">    
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Ruangan</h3>
            </div>
               <form class="form-horizontal" method="POST" action="">
                    <div class="modal-body">
                 <!-- AWAL COMBOX FAKULTAS -->
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Keterangan</label>
                  <div class="col-sm-10">
                         <?php $cbketerangan = $data['keterangan']; ?>
                        <select name="cbketerangan" class="form-control select2" style="width: 100%;">
                            <option <?php echo ($cbketerangan == 'INAP') ? "selected": "" ?>>INAP</option>
                            <option <?php echo ($cbketerangan == 'JALAN') ? "selected": "" ?>>JALAN</option>
                        </select>
                  </div>
                </div>
                 <!-- AKHIR -->

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Ruangan</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="uraian" name="txtruangan" value="<?php echo $data['ruangan']; ?>" placeholder="Nama Ruangan" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <input type="submit" name="btnedit" class="btn btn-primary pull-right" value="Simpan">
              </div>
            </div>
            </form>
          
    <?php
          if (isset($_POST["btnedit"])){
            $cbketerangan =$_POST['cbketerangan'];
             $txtruangan =$_POST['txtruangan'];
            $edit = mysqli_query($konek,"UPDATE  tbl_ruangan SET keterangan='$cbketerangan',ruangan='$txtruangan' WHERE kode='$id'");
            if ($edit)
            {
              ?>
              <script type="text/javascript">
                document.location.href="beranda.php?page=ruangan";
              </script>
              <?php
            }else{
             echo "<script>alert('Terjadi Kesalahan Inputan')</script>";
        echo "<meta http-equiv='refresh' content='0; url=?page=ruangan'>";
            }
          }
        ?>
          </div>
    </div>
