<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  @include('tamplate.head')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
 @include('tamplate.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('tamplate.sidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Starter Page</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Pengawasan</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

        <div class="card-body">
          <form action="{{ route('simpan-Pengawasan') }}" method="POST">
            {{ csrf_field() }}
                    {{-- <div class="form-group">
                      <label>ID:</label>
                      <input type="text" id="id" name ="id" class="form-control">
                    </div> --}}
                    <div class="form-group">
                      <label>Kabupaten:</label>
                      <input type="text" id="kabupaten" name="kabupaten" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Kapanewon:</label>
                        <input type="text" id ="kapanewon" name="kapanewon" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label>Kalurahan:</label>
                        <input type="text" id ="kelurahan" name="kelurahan" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label>Tahun Pengawasan:</label>
                        <input type="text" id="tahun_pengawasan" name="tahun_pengawasan" class="form-control"  />
                    </div>
                    <div class="form-group">
                        <label>Nomor SK	:</label>
                        <input type="text" id="nomor_sk" name="nomor_sk" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label>Tanggal SK:</label>
                        <input type="date" id="tanggal_sk" name="tanggal_sk" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label>Bentuk Pemanfaatan	:</label>
                        <input type="text" id="bentuk_pemanfaatan" name="bentuk_pemanfaatan" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label>Pengelola:</label>
                        <input type="text" id="pengelola" name="pengelola" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label>Persil Klas:</label>
                        <input type="text" id="persil_klas" name="persil_klas" class="form-control" />
                    </div>
                  <div class="form-group">
                    <label>Nomor Sertifikat:</label>
                    <input type="text" id="nomor_sertifikat" name="nomor_sertifikat" class="form-control" />
                  </div>
                  <div class="form-group">
                    <label>Luas Pemanfaatan:</label>
                    <input type="text" id="luas_pemanfaatan" name="luas_pemanfaatan" class="form-control" />
                  </div>
                  <div class="form-group">
                    <label>Luas Keseluruhan:</label>
                    <input type="text" id="luas_keseluruhan" name="luas_keseluruhan" class="form-control" />
                  </div>
                  <div class="form-group">
                    <label>Jumlah Bidang	:</label>
                    <input type="text" id="jumlah_bidang" name="jumlah_bidang" class="form-control" />
                  </div>
                  <div class="form-group">
                    <label>Lokasi:</label>
                    <input type="text" id="lokasi" name="lokasi" class="form-control" />
                  </div>
                  <div class="form-group">
                    <label>Koordinat:</label>
                    <input type="text" id="koordinat" name="koordinat" class="form-control" />
                  </div>
                  <div class="form-group">
                    <label>Jangka Waktu:</label>
                    <input type="text" id="jktwaktu" name="jktwaktu" class="form-control" />
                  <div>
                  <div class="form-group">
                    <label>Jenis Sk:</label>
                    <input type="text" id="jenis_sk" name="jenis_sk" class="form-control" />
                  <div>
                  <div class="form-group">
                    <label>Tinda Lanjut:</label>
                    <input type="text" id="tdklanjut" name="tdklanjut" class="form-control" />
                  <div>
                  <div class="form-group">
                      <label>Kesesuaian:</label>
                      <input type="text" id="kesesuaian" name="kesesuaian" class="form-control" />
                  <div>
                    <button type="submit" class="btn btn-success">Simpan Data</button>
                  </div>
        
                </form>
            </div>
        </div>
    </div>
</body>
</html>
        </div>
      </div>

    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  {{-- <aside class="control-sidebar control-sidebar-dark"> --}}
    <!-- Control sidebar content goes here -->
    {{-- <div class="content">
        <div class="card card-info card-outline">
            <div class="card-header">
                <div class="cart-tools">
                    <a href="#" class="btn btn-success">
                </div>
            </div>
        </div>
    </div>
  </aside> --}}
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  {{-- <footer class="main-footer"> --}}
    @include('tamplate.footer')
  </footer></div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
  @include('tamplate.script')

</body>
</html>