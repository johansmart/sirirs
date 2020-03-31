<?php
$id = base64_decode($_GET["id"]);
$sqlku = mysqli_query($konek,"SELECT * FROM tbl_dokter WHERE kode='$id'");
$data  = mysqli_fetch_array($sqlku);
$spesialis=$data['kode_spesialis'];
?>
<div class="col-md-12">    
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Dokter</h3>
            </div>
               <form class="form-horizontal" method="POST" action="">
              <div class="box-body">
               

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Dokter</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="uraian" name="txturaian" value="<?php echo $data['nama'] ?>" placeholder="Nama Dokter" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                  </div>
                </div>

                <!-- combox fakultas -->
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Spesialis</label>
                  <div class="col-sm-10">
                        <select name="cbfakultas" class="form-control select2" style="width: 100%;">
                      <?php
                        $qry = mysqli_query($konek,"SELECT * FROM tbl_spesialis"); 
                        while ($data=mysqli_fetch_array($qry)) 
                        {
                        ?>
                        <option class="form-control" value="<?php echo $data["kode"]; ?>" <?php 
                            if($spesialis==$data['kode']){echo "selected";} ?>><?php echo $data['uraian']; ?></option><?php
                          }
                      ?>

                        </select>
                  </div>
                </div>


                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <input type="submit" name="btnedit" class="btn btn-primary pull-right" value="Update">
                    </div>
                  </div>
                </div>
              </div>
            </form>
    <?php
          if (isset($_POST["btnedit"])){
            $txturaian =$_POST['txturaian'];
             $cbfakultas =$_POST['cbfakultas'];
            $edit = mysqli_query($konek,"UPDATE  tbl_dokter SET nama='$txturaian',kode_spesialis='$cbfakultas' WHERE kode='$id'");
            if ($edit)
            {
              ?>
              <script type="text/javascript">
                document.location.href="beranda.php?page=dGFtYmFoZG9rdGVycmFhZA==";
              </script>
              <?php
            }else{
             echo "<script>alert('Terjadi Kesalahan Inputan')</script>";
        echo "<meta http-equiv='refresh' content='0; url=?page=dGFtYmFoZG9rdGVycmFhZA=='>";
            }
          }
        ?>
          </div>
    </div>
