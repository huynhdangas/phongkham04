<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('doctor.css')
    <style>
        .form-group input {
            font-size: 0.875rem;
            padding: 0.625rem 0.6875rem;
            background-color: #2A3038;
            border-radius: 2px;
        }
        .card {
            margin: auto;
            width: 60%;
        }
        h4 {
            font-size: 1.5rem !important;
            font-weight: 500 !important;
        }
        .form-group select {
            background-color: #2A3038;
            border-radius:2px;
            font-size: 0.875rem;
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

    @include('doctor.sidebar')
    <!-- partial  start-->

    
    @include('doctor.navbar')

    <!-- partial  end-->

    <div class="main-panel">
        <div class="content-wrapper">
            
            
        <div class="card" style="margin:auto; width: 100%">
                  <div class="card-body">
                    <h4 class="card-title" style="font-size: 2.5em; font-width:500">Appointment</h4>
                    
                    <div class="table-responsive">
                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>Tên bệnh nhân</th>
                            <th>Email</th>
                            <th>SĐT</th>
                            <th>Tên bác sĩ</th>
                            <th>Ngày khám</th>
                            <th>Triệu chứng</th>
                            <th>Status</th>
                            <th>Chấp nhận</th>
                            <th>Huỷ</th>
                            <th>Gửi mail</th>
                            
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($data_appoint as $data_appoints)
                          <tr>
                            <td>{{$data_appoints->name}}</td>
                            <td>{{$data_appoints->email}}</td>
                            <td>{{$data_appoints->phone}}</td>
                            <td>{{$data_appoints->doctor}}</td>
                            <td>{{$data_appoints->date}}</td>
                            <td>{{$data_appoints->message}}</td>
                            <td><label class="badge badge-warning">{{$data_appoints->status}}</label></td>
                            <td><a class="badge badge-success" href="{{url('approved', $data_appoints->id)}}">Chấp nhận</a></td>
                            <td><a class="badge badge-danger" href="{{url('canceled', $data_appoints->id)}}">Huỷ</a></td>
                            <td><a class="badge badge-primary" href="{{url('email_view', $data_appoints->id)}}">Gửi</a></td>
                          </tr>
                        @endforeach  
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
            
            
        </div>
          
          
          <!-- partial -->
    </div>

        
    @include('doctor.js')
  </body>
</html>