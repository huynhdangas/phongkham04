<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
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

    @include('admin.sidebar')
    <!-- partial  start-->

    
    @include('admin.navbar')

    <!-- partial  end-->

    <div class="main-panel">
        <div class="content-wrapper">
            
            <div class="row">
              
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Add Doctor</h4>
                    @if(session()->has('message'))      
                        <div class="alert alert-success">
                        <strong>Success!</strong> {{session()->get('message')}}
                        </div>                        
                    @endif
                    
                    <form class="forms-sample" action="{{url('insert-doctor')}}" method="post" enctype="multipart/form-data" >
                    @csrf
                      <div class="form-group">
                        <label for="exampleInputUsername1">Doctor Name</label>
                        <input type="text" class="form-control" name="name"  placeholder="">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Phone Number</label>
                        <input type="text" class="form-control" name="phone"  placeholder="">
                      </div>

                      <div class="form-group">
                        <label>Speciality</label>
                        <select class="js-example-basic-single" style="width:100%" name="speciality">
                            <option value="Khoa mắt">Khoa mắt</option>
                            <option value="Khoa mũi">Khoa mũi</option>
                            <option value="Khoa miệng">Khoa miệng</option>
                            <option value="Da liễu">Da liễu</option>
                        </select>
                      </div>

                      <div class="form-group">
                        <label>Room No</label>
                        <input type="text" name="room" class="form-control" id="exampleInputEmail1" required="" placeholder="Số Room">
                      </div>
                      
                      <div class="form-group">
                        <label>Ảnh đại diện</label>
                        <br>
                        <input type="file" name="file" id="">                        
                      </div>

                      
                      
                      <button type="submit" class="btn btn-primary me-2">Submit</button>
                      
                    </form>
                  </div>
                </div>
            </div>
            
        </div>
          
          
          <!-- partial -->
    </div>

        
    @include('admin.js')
  </body>
</html>