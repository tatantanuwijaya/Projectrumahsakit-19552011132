<!DOCTYPE html>
<html lang="en">
  <head>
    <style type="text/css">
      label{
        display: inline-block;
        width: 100px;
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
          <div class="container" align="center" style="padding-top: 25px">
            <form action="{{url('upload_artikel')}}" method="POST" enctype="multipart/form-data">
              @csrf
              <h1 align="center">TAMBAH ARTIKEL <br>DI</h1>
              <h1 align="center" style="padding-bottom:10px; color: #00D9A5">SMRS - LANUD SURYADHARMA</h1>
              <div style="padding-bottom: 5px">
                <input type="text" style="color:black; width: 590px;" name="title" placeholder="Masukkan judul artikel atau informasi">
              </div>
              
              <div style="padding-bottom: 5px">
                <input type="text" style="color:black; width: 590px;" name="writer" placeholder="Masukkan nama penulis">
              </div>

              <div style="padding-bottom: 5px">
                <input type="date" style="color:black; width: 590px;" name="date" placeholder="Judul artikel atau informasi">
              </div>

              <div style="padding-bottom: 5px">
                <textarea name="description" style="color:black;" cols="68" rows="5" placeholder="Masukan deskripsi"></textarea>
              </div>

              <div style="padding-bottom: 5px">
                <label>Gambar</label>
                <input type="file" name="file">
              </div>

              <div style="padding-bottom: 5px">
                <input type="submit" class="btn btn-success" style="background: bg-primary">
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