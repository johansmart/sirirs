<?php
error_reporting(0);
$id = base64_decode($_GET["id"]);
$sqlku = mysqli_query($konek,"SELECT * FROM tbl_bed WHERE kode='$id'");
$data  = mysqli_fetch_array($sqlku);
?>
<div class="col-md-12">    
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">EDIT BED</h3>
            </div>
               <form class="form-horizontal" method="POST" action="">
               <div class="modal-body">
                

                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Kode</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="uraian" name="txtkode" disabled="disabled" value="<?php echo $data['kode']; ?>" placeholder="Kode" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Uraian</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="uraian" name="txturaian" value="<?php echo $data['uraian']; ?>" placeholder="Uraian" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Tersedia</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="uraian" name="txttersedia" value="<?php echo $data['tersedia']; ?>" placeholder="Tersedia" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                  </div>
                    <label for="inputEmail3" class="col-sm-2 control-label">Total</label>
                   <div class="col-sm-4">
                    <input type="text" class="form-control" id="uraian" name="txttotal" value="<?php echo $data['total']; ?>" placeholder="Total" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
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
                                $txttersedia =$_POST['txttersedia'];
                                $txttotal =$_POST['txttotal'];
                                $tanggal = date("Y-m-d H:i:s"); 
            $edit = mysqli_query($konek,"UPDATE  tbl_bed SET uraian='$txturaian',tersedia='$txttersedia',total='$txttotal',tanggal='$tanggal' WHERE kode='$id'");
            if ($edit)
            {
              ?>
              <script type="text/javascript">
                document.location.href="beranda.php?page=bed";
              </script>
              <?php
            }else{
             echo "<script>alert('Terjadi Kesalahan Inputan')</script>";
        echo "<meta http-equiv='refresh' content='0; url=?page=bed'>";
            }
          }
        ?>
          </div>
    </div>
