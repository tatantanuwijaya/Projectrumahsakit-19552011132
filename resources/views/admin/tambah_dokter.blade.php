<!DOCTYPE html>
<html lang="en">
  <head>
    <style type="text/css">
      label{
        display: inline-block;
        width: 150px;
      }
      left-align{
        text-align: left;
      }
    </style>
    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <div class="container" align="center" style="padding-top: 50px">
            @if(session()->has('message'))
            <div class="alert alert-success">
              {{session()->get('message')}}
            </div>
            @endif
                <form action="{{url ('upload_doctor')}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <!-- @method('PUT') -->
                    <h1 style="padding-bottom: 2px; font-size: 20px" >Tambah Dokter</h1>
                    <h1 style="padding-bottom: 10px; font-size: 25px; color: #00D9A5">SMRS - LANUD SURYADHARMA</h1>
                    <div style="padding-top: 10px; padding-bottom: 5px">
                        <label align="left">Nama Dokter</label>
                        <input type="text" style="color:black; width: 300px;" name="name" placeholder="Masukkan nama dokter">
                    </div>
                    <div style="padding-bottom: 5px">
                        <label align="left">No. Telepon</label>
                        <input type="number" style="color:black; width: 300px;" name="number" placeholder="Masukkan no telepon">
                    </div>
                    <div class="padding: 10px">
                        <label align="left">Spesialis</label>
                        <select name="speciality" style="color:black; width: 300px;">
                            <option value="">-Pilih Jenis Spesialis-</option>
                            <option value="Dokter Umum">Dokter Umum</option>
                            <option value="Dokter Gigi">Dokter Gigi</option>
                            <option value="Dokter Spesialis Urologi">Dokter Spesialis Urologi</option>
                            <option value="Dokter Spesialis Penyakit Dalam">Dokter Spesialis Penyakit Dalam</option>
                            <option value="Dokter Spesialis Obgyn">Dokter Spesialis Obgyn</option>
                            <option value="Dokter Spesialis Bedah">Dokter Spesialis Bedah</option>
                            <option value="Dokter Spesialis Anak">Dokter Spesialis Anak</option>
                            <option value="lainnya">Lainnya</option>
                        </select>
                    </div>
                    <div style="padding: 5px">
                        <label align="left">No. Ruangan</label>
                        <input type="number" style="color:black; width: 300px;" name="room" placeholder="Masukkan no ruangan">
                    </div>
                    <div style="padding-right: 40px">
                        <label style="width:220px;">Foto Dokter</label>
                        <input type="file" name="file" style="padding-left">
                    </div>
                    <div style="padding: 5px">
                        <label align="left">Harga</label>
                        <input type="number" style="color:black; width: 300px;" name="price" placeholder="Masukkan no ruangan">
                    </div>
                    <div style="padding-left: 40px; padding-top: 10px">
                        <input type="submit" class="btn btn-success" style="background-color: #00D9A5">
                    </div>
                </form>
            </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>