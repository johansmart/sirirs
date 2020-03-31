<?php
$id = base64_decode($_GET["id"]);
$sqlku = mysqli_query($konek,"SELECT * FROM tbl_jabatan WHERE kode='$id'");
$data  = mysqli_fetch_array($sqlku);
?>
<div class="col-md-12">    
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Jabatan</h3>
            </div>
               <form class="form-horizontal" method="POST" action="">
               <div class="modal-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Jabatan</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="uraian" name="txturaian" value="<?php echo $data['uraian']; ?>" placeholder="Jabatan" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
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
            $txturaian =$_POST['txturaian'];
            $edit = mysqli_query($konek,"UPDATE  tbl_jabatan SET uraian='$txturaian' WHERE kode='$id'");
            if ($edit)
            {
              ?>
              <script type="text/javascript">
                document.location.href="beranda.php?page=jabatan";
              </script>
              <?php
            }else{
             echo "<script>alert('Terjadi Kesalahan Inputan')</script>";
        echo "<meta http-equiv='refresh' content='0; url=?page=jabatan'>";
            }
          }
        ?>
          </div>
    </div>
