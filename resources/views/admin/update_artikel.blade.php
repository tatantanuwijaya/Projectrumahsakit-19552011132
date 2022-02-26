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
      <base href="/public">
      @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
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
            <div class="container" align="center">
                <form action="{{url('editartikel',$data->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <h1 style="padding-top: 5px; font-size: 20px" >UPDATE ARTIKEL</h1>
                    <h1 style="padding-bottom: 5px; font-size: 25px; color: #00D9A5">SMRS - LANUD SURYADHARMA</h1>
                    <div style="padding-top: 10px; padding-bottom: 5px">
                        <label align="left">Judul Artikel</label>
                        <input type="text" style="color:black; width: 500px;" name="title" value="{{$data->title}}">
                    </div>
                    <div style="padding-bottom: 5px">
                        <label align="left">Penulis</label>
                        <input type="text" style="color:black; width: 500px;" name="writer" value="{{$data->writer}}">
                    </div>
                    <div style="padding-bottom: 5px">
                        <label align="left">Tanggal</label>
                        <input type="date" style="color:black; width: 500px;" name="date" value="{{$data->date}}">
                    </div>
                    <div style="padding: 5px">
                        <label align="left">Deskripsi</label>
                        <textarea name="description" id="" style="color:black;" cols="65" rows="5">{{$data->description}}</textarea>
                    </div>
                    <div style="padding: 5px">
                      <label>Foto Lama</label>
                      <img src="artikelimage/{{$data->image}}" height="100" width="100">
                    </div>
                    <div>
                        <label>Ubah Foto</label>
                        <input type="file" name="file">
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