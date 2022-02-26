<!DOCTYPE html>
<html lang="en">
  <head>
      <style type="text/css">
        label{
          display: inline-block;
          width: 200px;
        }
        left-align{
          text-align: left;
        }
        table.scroll {
          width:1000px;
          border:1px #a9c6c9 solid;
        }
        table.scroll thead{
          display:table;
          width:100%;
        }
        table.scroll tbody {
          display:block;
          height:400px;
          overflow:auto;
          float:left;
          width:100%;
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
           <div >                   
               
               <table class="scroll">
                 <h1 align="center" style="padding-top: 30px">DAFTAR ARTIKEL <br> DI</h1>
                 <h1 align="center" style="padding-bottom: 30px; color:#00D9A5"><b>SMRS-LANUD SURYADHARMA</b></h1>
                   @foreach($data as $artikel)
                   <tr align="left" style="background-color: #00D9A5">
                       <th style="padding:10px; width: 150px">Judul Artikel</th>
                       <th style="padding:10px;  color:black; background-color: #c5fcef;" align="justify">{{$artikel->title}}</th>
                   </tr>
                   <tr align="left" style="background-color: #00D9A5">
                       <th style="padding:10px">Penulis Artikel</th>
                       <th style="padding:10px;  color:black; background-color: #c5fcef;">{{$artikel->writer}}</th>
                   </tr>
                   <tr align="left" style="background-color: #00D9A5">
                       <th style="padding:10px">Tanggal</th>
                       <th style="padding:10px; color:black; background-color: #c5fcef;">{{$artikel->date}}</th>
                   </tr>

                   <tr align="justify" style="background-color: #00D9A5">
                       <th style="padding:10px">Deskripsi</th>
                       <th style="padding:10px; color:black; background-color: #c5fcef;" align="justify">{{$artikel->description}}</th>
                   </tr>

                   <tr align="justify" style="background-color: #00D9A5">
                       <th style="padding:10px">Gambar</th>
                       <th style="padding:10px; background-color: #c5fcef;"><img style="width: 200px;" src="artikelimage/{{$artikel->image}}" alt=""></th>
                   </tr>
                   
                   <tr align="justify" style="background-color: #00D9A5">
                       <th style="padding:10px"></th>
                       <th style="padding:10px; background-color: #00D9A5;">
                           <a class="btn btn-primary mai-pencil" href="{{url('updateartikel', $artikel->id)}}"> Update</a>
                           <a class="btn btn-danger mai-trash-outline" onclick="return confirm('Apakah anda yakin ingin menghapus artikel dengan judul {{$artikel->title}}?')" href="{{url('artikeldelete', $artikel->id)}}"> Delete</a>
                        </th>
                   </tr>
                   @endforeach
               </table>
               
           </div>
       </div>
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>