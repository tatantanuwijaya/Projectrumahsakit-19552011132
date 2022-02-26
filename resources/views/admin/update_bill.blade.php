<!DOCTYPE html>
<html lang="en">
  <head>
      <base href="/public">
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
                <form action="{{url('editbill', $data->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <!-- @method('PUT') -->
                    <h1 style="padding-bottom: 2px; font-size: 20px" >Update Tagihan Pasien</h1>
                    <h1 style="padding-bottom: 10px; font-size: 25px; color: #00D9A5">SMRS - LANUD SURYADHARMA</h1>
                    <div style="padding: 5px">
                      <label>Nama Pasien</label>
                      <input type="text" name="name" value="{{$data->name}}" style="color:black; width: 300px;">
                    </div>
                    <div style="padding: 5px">
                      <label>Nama Dokter</label>
                      <input type="text" name="doctor" value="{{$data->doctor}}" style="color:black; width: 300px;">
                    </div>
                    <div style="padding: 5px">
                        <label align="left">Tanggal Bertemu</label>
                        <input type="date" style="color:black; width: 300px;" name="date" value="{{$data->date}}">
                    </div>
                    <div style="padding: 5px">
                        <label align="left">Waktu Bertemu</label>
                        <input type="time" style="color:black; width: 300px;" name="time" value="{{$data->time}}">
                    </div>
                    <div style="padding: 5px">
                      <label>Jumlah Tagihan</label>
                      <input type="number" name="bill" value="{{$data->bill}}" style="color:black; width: 300px;">
                    </div>
                    <div style="padding: 5px">
                        <label align="left">Tenggat Tagihan</label>
                        <input type="date" style="color:black; width: 300px;" name="lastdate" value="{{$data->lastdate}}">
                    </div>
                    <div style="padding: 5px">
                      <label>Status</label>
                      <input type="text" name="status" value="{{$data->status}}" style="color:black; width: 300px;">
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