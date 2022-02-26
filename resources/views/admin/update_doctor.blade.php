<!DOCTYPE html>
<html lang="en">
  <head>
      <base href="/public">
      @include('admin.css')
      
      <style type="text/css">
          label
          {
              display: inline-block;
              width: 200px;
          }
      </style>
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
      <div class="container-fluid page-body-wrapper">
          <div align="center" style="padding-top:25px">
          @if(session()->has('message'))
          <div class="alert alert-success">
            {{session()->get('message')}}
          </div>
          @endif
          <h2>PERBARUI DATA DOKTER <br> DI</h2>
          <h1 style="color: #00D9A5"><b>SMRS - LANUD SURYADHARMA</b></h1>

          <div class="container" align="center" style="padding: 25px">
              
              <form action="{{url('editdoctor', $data->id)}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div style="padding: 5px">
                      <label>Nama Dokter</label>
                      <input type="text" name="name" value="{{$data->name}}" style="color:black" width="500">
                  </div>
                  <div style="padding: 5px">
                      <label>No Telepon</label>
                      <input type="number" name="number" value="{{$data->phone}}" style="color:black">
                  </div>
                  <div style="padding: 5px">
                      <label>Spesialis</label>
                      <input type="text" name="speciality" value="{{$data->speciality}}" style="color:black">
                  </div>
                  <div style="padding: 5px">
                      <label>No Ruangan</label>
                      <input type="number" name="room" value="{{$data->room}}" style="color:black">
                  </div>

                  <div style="padding: 5px">
                      <label>Foto Lama</label>
                      <img src="doctorimage/{{$data->image}}" height="50" width="50">
                  </div>
                  <div style="padding-left: 100px">
                      <label>Ubah Foto</label>
                      <input type="file" name="file">
                  </div>
                  <div style="padding: 5px">
                      <label>Harga</label>
                      <input type="text" name="price" value="{{$data->price}}" style="color:black">
                  </div>
                  <div>
                      <input type="submit" class="btn btn-success" style="background-color: #00D9A5">
                  </div>
              </form>
          </div>
          
      </div>
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>