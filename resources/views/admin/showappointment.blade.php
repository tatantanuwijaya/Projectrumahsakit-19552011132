

<!DOCTYPE html>
<html lang="en">
  <head>
      @include('admin.css')
      <style type="text/css">
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
      <div class="container-fluid page-body">
          <div align="center" style="padding-top:100px">
          <h2>DAFTAR PERMINTAAN JANJI PENGUNJUNG DENGAN DOKTER <br> DI</h2>
          <h1 style="padding-bottom:20px"><b>SMRS - LANUD SURYADHARMA</b></h1>
          <!-- <a href="{{url('appointmentexport')}}">ekpor</a> -->
              <table class="scroll">
                  <tr style="background-color: #00D9A5" align="center">
                      <th style="padding:10px">Nama Pengunjung</th>
                      <th style="padding:10px">Email Pengunjung</th>
                      <th style="padding:10px">No.Telepon</th>
                      <th style="padding:10px">Nama Dokter</th>
                      <th style="padding:10px">Tanggal</th>
                      <th style="padding:10px">Pesan</th>
                      <th style="padding:10px">Status</th>
                      <th style="padding:10px">Setuju</th>
                      <th style="padding:10px">Tolak</th>
                      <th style="padding:10px">Kirim Email</th>
                  </tr>
                  @foreach($data as $appoint)
                  <tr style="background-color: #c5fcef; color:black">
                      <td style="padding:10px">{{$appoint->name}}</td>
                      <td style="padding:10px">{{$appoint->email}}</td>
                      <td style="padding:10px">{{$appoint->phone}}</td>
                      <td style="padding:10px">{{$appoint->doctor}}</td>
                      <td style="padding:10px">{{$appoint->date}}</td>
                      <td style="padding:10px">{{$appoint->message}}</td>
                      <td style="padding:10px">{{$appoint->status}}</td>
                      <td style="padding:10px">
                        <a class="btn btn-primary mai-checkmark" href="{{url('approved',$appoint->id)}}"></a>
                      </td>
                      <td style="padding:10px">
                        <a class="btn btn-danger mai-close" onclick="return confirm('Apakah anda yakin ingin menolak permintaan tersebut?')" href="{{url('cancel',$appoint->id)}}"></a>
                      </td>
                      <td style="padding:10px">
                        <a class="btn btn-success mai-mail" href="{{url('emailview',$appoint->id)}}"></a>
                      </td>
                  </tr>
                  @endforeach
              </table>
          </div>
      </div> 
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>