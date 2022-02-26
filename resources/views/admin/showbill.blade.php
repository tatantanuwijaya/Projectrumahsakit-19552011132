<!DOCTYPE html>
<html lang="en">
  <head>
      @include('admin.css')
      <style type="text/css">
        table.scroll {
          width:900px;
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
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <div aling="center" style="padding-top:25px">
            <h2 align="center">DAFTAR TAGIHAN <br> DI</h2>
            <h1 style="padding-bottom:20px" align="center">
                <b>SMRS - LANUD SURYADHARMA</b>
            </h1>
                <table class="scroll" style="background-color: #00D9A5; text-align:center">
                    <tr>
                      <th style="padding:10px">Nama Pasien</th>
                      <th style="padding:10px">Nama Dokter</th>
                      <th style="padding:10px">Tanggal bertemu</th>
                      <th style="padding:10px">Waktu bertemu</th>
                      <th style="padding:10px">Jumlah Tagihan</th>
                      <th style="padding:10px">Tenggat Tagihan</th>
                      <th style="padding:10px">Status</th>
                      <th style="padding:10px">Edit</th>
                      <th style="padding:10px">Delete</th>
                    </tr>
                    @foreach($data as $bill)
                   <tr style="background-color: #c5fcef; color:black">
                      <td style="padding:10px">{{$bill->name}}</td>
                      <td style="padding:10px">{{$bill->doctor}}</td>
                      <td style="padding:10px">{{$bill->date}}</td>
                      <td style="padding:10px">{{$bill->time}}</td>
                      <td style="padding:10px">{{$bill->bill}}</td>
                      <td style="padding:10px">{{$bill->lastdate}}</td>
                      <td style="padding:10px"><i>{{$bill->status}}</i></td>
                      <td style="padding:10px">
                        <a class="btn btn-primary mai-pencil" href="{{url('updatebill', $bill->id)}}"></a>
                      </td>
                      <td style="padding:10px">
                        <a class="btn btn-danger mai-trash-outline" onclick="return confirm('Apakah anda yakin ingin menghapus tagihan untuk {{$bill->name}}?')" href="{{url('deletebill',$bill->id)}}"></a>
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