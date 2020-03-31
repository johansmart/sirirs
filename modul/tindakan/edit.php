<?php
error_reporting(0);
$id = base64_decode($_GET["id"]);
$sqlku = mysqli_query($konek,"SELECT * FROM tbl_tindakan WHERE kode='$id'");
$data  = mysqli_fetch_array($sqlku);
?>
<div class="col-md-12">    
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">EDIT TINDAKAN</h3>
            </div>
               <form class="form-horizontal" method="POST" action="">
               <div class="modal-body">
                

                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Kode Tindakan</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="uraian" name="txtkode" disabled="disabled" value="<?php echo $data['kode']; ?>" placeholder="KODE" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Uraian</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="uraian" name="txturaian" value="<?php echo $data['uraian']; ?>" placeholder="Uraian" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Harga</label>
                  <div class="col-sm-4">
                    <input type="number" class="form-control" id="uraian" name="txtharga" value="<?php echo $data['harga']; ?>" placeholder="Harga" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                  </div>
                    <label for="inputEmail3" class="col-sm-2 control-label">Total</label>
                  
                       <div class="col-sm-4">
                         <?php $cbketerangan = $data['keterangan']; ?>
                        <select name="cbketerangan" class="form-control select2" style="width: 100%;">
                            <option <?php echo ($cbketerangan == 'INAP') ? "selected": "" ?>>INAP</option>
                            <option <?php echo ($cbketerangan == 'JALAN') ? "selected": "" ?>>JALAN</option>
                        </select>
                  </div>



                </div>


                 <input type="submit" name="btnedit" class="btn btn-primary pull-right" value="Simpan">
              </div>
              <div class="modal-footer">
               
              </div>
            </div>
            </form>
          
    <?php
          if (isset($_POST["btnedit"])){
                                $txturaian =$_POST['txturaian'];
                                $txtharga =$_POST['txtharga'];
                                $cbketerangan =$_POST['cbketerangan'];
            $edit = mysqli_query($konek,"UPDATE  tbl_tindakan SET uraian='$txturaian',harga='$txtharga',keterangan='$cbketerangan' WHERE kode='$id'");
            if ($edit)
            {
              ?>
              <script type="text/javascript">
                document.location.href="beranda.php?page=tindakan";
              </script>
              <?php
            }else{
             echo "<script>alert('Terjadi Kesalahan Inputan')</script>";
        echo "<meta http-equiv='refresh' content='0; url=?page=edit_tindakan'>";
            }
          }
        ?>
          </div>
    </div>
