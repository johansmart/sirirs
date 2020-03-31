<?php include'koneksi.php'; 
include'valid_admin.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>RAWAT INAP-MUJI-RAHAYU</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="plugins/iCheck/all.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="bower_components/select2/dist/css/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
   <!-- Untuk Loading -->
   <link rel="stylesheet" href="plugins/pace/pace.min.css">
   <!-- akhir Loading -->

   <!-- untuk tabel -->
   <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
   <!-- akhir tabel -->
  
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
<style type="text/css">
  
th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #7300e6;
    color: white;
    text-align: left;
}


</style>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="beranda.php?page=beranda"" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>R</b>I</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>RA</b>WAT-INAP</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
         <!-- PEMBERITAHUAN -->
          <li class="dropdown notifications-menu">
            
          </li>
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="gambar/dll/user.png" class="user-image" alt="User Image">
              <span class="hidden-xs">AKUN</span>
            </a>
            <ul class="dropdown-menu">
              <li class="user-header">
                <img src="gambar/dll/user.png" class="img-circle" alt="User Image">
                <h4>AKUN RAWAT INAP</h4>
                <H5><?php echo $_SESSION['email'] ?></H5>
<!--            
                <p>
               ADMINISTRATOR
                  <small>12 SEPTEMBER 1996</small>
                </p> -->
              </li>
           
              <li class="user-body">
                <div class="row">
                </div>
              </li>
            
              <li class="user-footer">
                <div class="pull-right">
                  <a href="keluar_admin.php" class="btn btn-default btn-flat">EXIT</a>
                </div>
              </li>
            </ul>
          </li>
          <li>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <aside class="main-sidebar">
    <section class="sidebar">
      <div class="user-panel">
        <div class="pull-left image">
          <img src="gambar/dll/user.png" class="img-circle" alt="All">
        </div>
        <div class="pull-left info">
          <p><?php echo $_SESSION['email'] ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i>RAWAT INAP</a>
        </div>
      </div>
      <br>
      <ul class="sidebar-menu" data-widget="tree">
        <li><a href="beranda.php?page=beranda"><i class="fa fa-home"></i> <span>HOME</span></a></li>
        <li class="treeview">
          <a href="beranda.php?page=home">
            <i class="fa fa-plus-square-o"></i> <span>DATA MASTER</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="beranda.php?page=pendidikan"><i class="fa fa-legal"></i>Data Pendidikan</a></li>
            <li><a href="beranda.php?page=spesialis"><i class="fa fa-legal"></i>Data Spesialis</a></li>
            <li><a href="beranda.php?page=jabatan"><i class="fa fa-legal"></i>Data Jabatan</a></li>
            <li><a href="beranda.php?page=pekerjaan"><i class="fa fa-legal"></i>Data Pekerjaan</a></li>
            <li><a href="beranda.php?page=cara_bayar"><i class="fa fa-legal"></i>Data Cara Bayar</a></li>
            <li><a href="beranda.php?page=ruangan"><i class="fa fa-legal"></i>Data Ruangan</a></li>

      

            <li><a href="beranda.php?page=rujukan"><i class="fa fa-diamond"></i>Data Rujukan</a></li>
            <li><a href="beranda.php?page=icd"><i class="fa fa-diamond"></i>Data ICD (Diagnosa) </a></li>
            <li><a href="beranda.php?page=bed"><i class="fa fa-diamond"></i>Data Kelas </a></li>
            <li><a href="beranda.php?page=tindakan"><i class="fa fa-child"></i>Data Tindakan</a></li>


            <li><a href="beranda.php?page=gagal"><i class="fa fa-child"></i>Data Cara Pulang</a></li>



          </ul>
        </li>

        <li class="treeview">
          <a href="beranda.php?page=home">
            <i class="fa fa-plus-square-o"></i> <span>ADMINISTRASI</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="beranda.php?page=pegawai"><i class="fa fa-child"></i>Data Pegawai & Dokter</a></li>
            <li><a href="beranda.php?page=daftar_dokter"><i class="fa fa-diamond"></i>List Dokter</a></li>

          </ul>
        </li>




        <li class="treeview">
          <a href="beranda.php?page=home">
            <i class="fa fa-plus-square-o"></i> <span>MEDICAL RECORD</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
           <li><a href="beranda.php?page=pasien"><i class="fa fa-ra"></i> <span>Registrasi Medical Record</span></a></li>
           <li><a href="beranda.php?page=pasien_lama"><i class="fa fa-ra"></i> <span>Registrasi Kunjungan Pasien</span></a></li>
            <li><a href="beranda.php?page=pasien_pulang"><i class="fa fa-ra"></i> <span>Cata Ulang Kunjungan Pasien</span></a></li>
          </ul>
        </li>





         <li class="treeview">
          <a href="beranda.php?page=home">
            <i class="fa fa-plus-square-o"></i> <span>TINDAKAN</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="beranda.php?page=laporan"><i class="fa fa-diamond"></i>Data Tindakan</a></li>
          </ul>
        </li>

           <li class="treeview">
          <a href="beranda.php?page=home">
            <i class="fa fa-plus-square-o"></i> <span>ASUHAN GIZI</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="beranda.php?page=laporan"><i class="fa fa-diamond"></i>Pasien Konsul Gizi</a></li>
          </ul>
        </li>



          <li class="treeview">
          <a href="beranda.php?page=beranda">
            <i class="fa fa-plus-square-o"></i> <span>LAPORAN</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            
            <li><a href="beranda.php?page=laporan_pegawai"><i class="fa fa-book"></i>Laporan Pegawai</a></li>
            <li><a href="beranda.php?page=laporan_dokter"><i class="fa fa-book"></i>Laporan Dokter</a></li>
            <li><a href="beranda.php?page=laporan_registrasi"><i class="fa fa-book"></i>Laporan Registrasi Pasien</a></li>
            <li><a href="beranda.php?page=lap_kunjungan"><i class="fa fa-book"></i>Lap Pasien Masuk Rawat Inap</a></li>
            <li><a href="beranda.php?page=laporan_keluar"><i class="fa fa-book"></i>Lap Pasien Keluar Rawat Inap</a></li>
            <li><a href="beranda.php?page=laporan_spesialis"><i class="fa fa-book"></i>Laporan Spesialis </a></li>
            <li><a href="beranda.php?page=laporan_ruangan"><i class="fa fa-book"></i>Laporan Ruangan </a></li>
            <li><a href="beranda.php?page=laporan_icd"><i class="fa fa-book"></i>Laporan ICD X </a></li>
             <li><a href="beranda.php?page=laporan_tindakan"><i class="fa fa-book"></i>Laporan Daftar Tindakan </a></li>
          </ul>
        </li>










      </ul>
    </section>
  </aside>
  <div class="content-wrapper">
    <section class="content-header">
    </section>
<section class="content">
<div class="row">
         <?php 
           
            if(isset($_GET['page'])){
              $page = $_GET['page'];
              switch ($page) {
            
              case 'spesialis':
                  include "modul/spesialis/index.php"; break;
              case 'edit_spesialis':
                  include "modul/spesialis/edit.php"; break;


              case 'pendidikan':
                  include "modul/pendidikan/index.php"; break;
              case 'edit_pendidikan':
                  include "modul/pendidikan/edit.php"; break;


               case 'jabatan':
                  include "modul/jabatan/index.php"; break;
              case 'edit_jabatan':
                  include "modul/jabatan/edit.php"; break;


               case 'pekerjaan':
                  include "modul/pekerjaan/index.php"; break;
              case 'edit_pekerjaan':
                  include "modul/pekerjaan/edit.php"; break;


              case 'pegawai':
                  include "modul/pegawai/index.php"; break;
              case 'edit_pegawai':
                  include "modul/pegawai/edit.php"; break;
             
              case 'filter_dokter':
                  include "modul/pegawai/filter_dokter.php"; break;

                case 'edit_jadwal':
                  include "modul/pegawai/edit_jadwal.php"; break;

                     case 'detail_jadwal':
                  include "modul/pegawai/detail_jadwal.php"; break;

                     case 'daftar_dokter':
                  include "modul/pegawai/daftar_dokter.php"; break;

                   case 'berita':
                  include "modul/berita/index.php"; break;
                  case 'edit_berita':
                  include "modul/berita/edit.php"; break;


                     case 'pasien':
                  include "modul/pasien/index.php"; break;

                     case 'edit_pasien':
                  include "modul/pasien/edit.php"; break;
                      case 'pasien_lama':
                  include "modul/pasien/pasien_lama.php"; break;

                     case 'edit_lama':
                  include "modul/pasien/edit_lama.php"; break;



                     case 'verifikasi':
                  include "modul/pasien/verifikasi.php"; break;


                    case 'pasien_pulang':
                  include "modul/pasien/pasien_pulang.php"; break;


                    case 'cetak_ulang':
                      include "modul/pasien/cetak_ulang.php"; break;






                      case 'ruangan':
                  include "modul/ruangan/index.php"; break;

                     case 'edit_ruangan':
                  include "modul/ruangan/edit.php"; break;


                  case 'cara_bayar':
                      include "modul/cara_bayar/index.php"; break;
                  case 'edit_cara_bayar':
                      include "modul/cara_bayar/edit.php"; break;



                  case 'rujukan':
                      include "modul/rujukan/index.php"; break;
                  case 'edit_rujukan':
                      include "modul/rujukan/edit.php"; break;

                  case 'icd':
                      include "modul/icd/index.php"; break;
                  case 'edit_icd':
                      include "modul/icd/edit.php"; break;
                  case 'bed':
                      include "modul/bed/index.php"; break;
                  case 'edit_bed':
                      include "modul/bed/edit.php"; break;
                  case 'tindakan':
                      include "modul/tindakan/index.php"; break;
                  case 'edit_tindakan':
                      include "modul/tindakan/edit.php"; break;

                 


                  // Case LAPORAN

                  case 'lap_kunjungan':
                  include "modul/laporan/laporan_kunjungan.php"; break;
                  case 'laporan_registrasi':
                  include "modul/laporan/laporan_registrasi.php"; break;

                  case 'laporan_dokter':
                  include "modul/laporan/laporan_dokter.php"; break;

                   case 'laporan_pegawai':
                  include "modul/laporan/laporan_pegawai.php"; break;
                    case 'laporan_spesialis':
                  include "modul/laporan/laporan_spesialis.php"; break;


                   case 'laporan_keluar':
                  include "modul/laporan/laporan_pulang.php"; break;
                   case 'laporan_ruangan':
                  include "modul/laporan/laporan_ruangan.php"; break;

                   case 'laporan_icd':
                  include "modul/laporan/laporan_icd.php"; break;

                   case 'laporan_tindakan':
                  include "modul/laporan/laporan_tindakan.php"; break;










                  // MODUL BARU RADIOLOGI

                    case 'cmFkaW9sb2dpdGFtYmFoZGF0YQ==':
                  include "modul/radiologi/index.php"; break;
              // Edit Radiologi
              case 'cmFkaW9sb2dpdXBkYXRlZGF0YQ==':
                  include "modul/radiologi/edit.php"; break;
               case 'dGFtcGlscmFkaW9sb2dpZGVsaXM=':
                  include "modul/radiologi/tampil.php"; break;

                case 'detail':
                  include "modul/radiologi/detail.php"; break;




                      // MODUL LAMA

                  case 'beranda':
                      include "modul/halaman_utama/index.php"; break;
                  default:
                       include "modul/gagal/index.php";
                      break;
                  }
                      }else{
                        include "modul/halaman_utama/index.php";
                      }
                 ?>
    <!-- /.content -->
  </div>
</section>


  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2019 <a href="#">RSU MUJI RAHAYU</a>.</strong> All rights
    reserved.
  </footer>
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Select2 -->
<script src="bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- InputMask -->
<script src="plugins/input-mask/jquery.inputmask.js"></script>
<script src="plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- date-range-picker -->
<script src="bower_components/moment/min/moment.min.js"></script>
<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- bootstrap color picker -->
<script src="bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- SlimScroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- Page script -->
<script src="ckeditor/ckeditor.js"></script>
    <script type="text/javascript">
      CKEDITOR.replace( 'alamat',{height: 150} );
    </script>
<script type="text/javascript" src="fungsi/hapus.js"></script>

<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A' })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    })

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass   : 'iradio_minimal-blue'
    })
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass   : 'iradio_minimal-red'
    })
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass   : 'iradio_flat-green'
    })

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    //Timepicker
    $('.timepicker').timepicker({
      showInputs: false
    })
  })
</script>
<!-- untuk loading  pace -->
<script src="plugins/pace/pace.min.js"></script>
<!-- DATA TABEL BROO -->
<script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': true,
      // 'searching'   : true,
      // 'ordering'    : true,
      'info'        : true,
      'autoWidth'   : true
    })
  })
</script>
<!-- AKHIR TABEL -->
<!-- LOADING -->
<script type="text/javascript">
  $(document).ajaxStart(function() { Pace.restart(); });
    $('.ajax').click(function(){
        $.ajax({url: '#', success: function(result){
            $('.ajax-content').html('<hr>Ajax Request Completed !');
        }});
    });
</script> 
<!-- LOADING -->
<!-- AWAL HANYA ANGKA -->

<script>
    function hanyaAngka(evt) {
      var charCode = (evt.which) ? evt.which : event.keyCode
       if (charCode > 31 && (charCode < 48 || charCode > 57))

        return false;
      return true;
    }
  </script>

<!-- AKHIR -->
</body>
</html>
