<?php
error_reporting(0);
$id = base64_decode($_GET["id"]);
$sqlku = mysqli_query($konek,"SELECT * FROM tbl_pegawai WHERE kode='$id'");
$data  = mysqli_fetch_array($sqlku);

$spesialis=$data['kode_spesialis'];
?>
    <section class="content">
      <div class="row">
        <div class="col-md-3">
          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="gambar/pegawai/<?php echo $data['gambar'] ?>" alt="User profile picture">

              <h3 class="profile-username text-center"><?php echo $data['nama'] ?>

              </h3>

              <p class="text-muted text-center"><?php echo $data['nik'] ?></p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b><?php echo $data['nip'] ?></b> <a class="pull-right">NIP</a>
                </li>
                <li class="list-group-item">
                  <b><?php echo $data['jenis_kelamin'] ?></b> <a class="pull-right">Jenis Kelamin</a>
                </li>
                <li class="list-group-item">
                  <b><?php echo $data['keterangan'] ?></b> <a class="pull-right">Status</a>
                </li>
                <li class="list-group-item">
                  <b><?php echo $data['tgl_lahir'] ?></b> <a class="pull-right">Tgl Lahir</a>
                </li>
                 <li class="list-group-item">
                  <b><?php echo $data['email'] ?></b> <a class="pull-right">Email</a>
                </li>

                 <li class="list-group-item">
                  <b><?php echo $data['handphone'] ?></b> <a class="pull-right">HandPhone</a>
                </li>

                 <li class="list-group-item">
                  <b><?php echo $data['tgl_update'] ?></b> <a class="pull-right">Update Jadwal</a>
                </li>


              </ul>
                <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="">
                    <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Img</label>
                  <div class="col-sm-10">
                    <input type="file" class="form-control" id="uraian" name="txtgambar" required oninvalid="this.setCustomValidity('Gambar Wajib di Isi')" oninput="setCustomValidity('')" />
                  </div>
                </div>

                   <input type="submit" name="btnuplad" class="btn btn-primary btn-block" value="Update Gambar">
                </form>
                 <?php
                 if (isset($_POST["btnuplad"])){
                                  $nama_file   = strtolower($_FILES['txtgambar']['name']);
                                  $lokasi_file = $_FILES['txtgambar']['tmp_name'];
                  $upoadgambar = mysqli_query($konek,"UPDATE  tbl_pegawai SET gambar='$nama_file' WHERE kode='$id'");
                  if ($upoadgambar){
                    if(!empty($lokasi_file)){
                    move_uploaded_file($lokasi_file, "gambar/pegawai/$nama_file");
                    ?>
                    <script type="text/javascript">
                    document.location.href="beranda.php?page=filter_dokter";
                    </script>
                    <?php
                  }else{
                    echo "Terjadi kesalahan";
                  }
                }
              }
              ?>
             
            </div>
            <!-- /.box-body -->
          </div>
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">JADWAL </a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
              <div class="tab-pane" id="settings">
                <form class="form-horizontal">
                 
                 
                  <div class="box">
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>NO</th>
                  <th>HARI</th>
                  <th>JADWAL</th>
                  <th>TGL UPDATE</th>
                </tr>
                <tr>
                  <td>1</td>
                  <td>SENIN</td>
                  <td><?php echo $data['hari_senin'] ?></td>
                  <td><span class="badge bg-green"><?php echo $data['tgl_update'] ?></span></td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>SELASA</td>
                  <td><?php echo $data['hari_selasa'] ?></td>
                   <td><span class="badge bg-green"><?php echo $data['tgl_update'] ?></span></td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>RABU</td>
                  <td><?php echo $data['hari_rabu'] ?></td>
                   <td><span class="badge bg-green"><?php echo $data['tgl_update'] ?></span></td>
                </tr>

                <tr>
                  <td>4</td>
                  <td>KAMIS</td>
                  <td><?php echo $data['hari_kamis'] ?></td>
                 <td><span class="badge bg-green"><?php echo $data['tgl_update'] ?></span></td>
                </tr>

                <tr>
                  <td>5</td>
                  <td>JUMAT</td>
                  <td><?php echo $data['hari_jumat'] ?></td>
                  <td><span class="badge bg-green"><?php echo $data['tgl_update'] ?></span></td>
                </tr>

                <tr>
                  <td>6</td>
                  <td>SABTU</td>
                  <td><?php echo $data['hari_sabtu'] ?></td>
                  <td><span class="badge bg-green"><?php echo $data['tgl_update'] ?></span></td>
                </tr>

                <tr>
                  <td>7</td>
                  <td>MINGGU</td>
                  <td><?php echo $data['hari_minggu'] ?></td>
                 <td><span class="badge bg-red"><?php echo $data['tgl_update'] ?></span></td>
                </tr>

                 <tr>

                  <td colspan="4"><h4><br> Catatan : Jadwal dokter <?php echo $data['nama'] ?>  di atas dapat berubah swaktu-waktu</h4>
</td>
                </tr>



              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

                   

                </form>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
  </div>