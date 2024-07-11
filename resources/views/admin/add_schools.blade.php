<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css') 
    <style type="text/css">
      label{
        display: inline-block;
        width:200px;
      }
    </style>
    
  </head>
  <body>
       @include('admin.arrange')
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">

         <div class="container" style="color:black; padding-top:50px" align="center" >

         @if(session()->has('message'))
        <div class="alert alert-success">
          <button type="button" class="close" data-dismiss="alert">
             X
          </button>
          {{session()->get('message')}}

        </div>
        @endif

           <form action="{{url('addschool')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div style="padding:15px;">
              <label for="">School Name</label>
              <input type="text" name="name" placeholder="Enter School name here!" require="" required="">
            </div>

            <div style="padding:15px;">
              <label for="">School district</label>
              <input type="text" name="school_district" placeholder="Enter School district here!" required="">
            </div>

            <div style="padding:15px;">
              <label for="">Registration Number</label>
              <input type="text" name="registration_number" placeholder="Enter Registration No!" required="">
            </div>

            <div style="padding:15px;">
              <label for="">Representative Name</label>
              <input type="text" name="representative_name" placeholder="Representative name!" required="">
            </div>

            <div style="padding:15px;">
              <label for="">Representative Email</label>
              <input type="text" name="representative_email" placeholder="Representative email!" required="">
            </div>

            <div style="padding:15px">
            
              <input type="submit" class="btn btn-success">
            </div>
            
           </form>
         </div>
        </div>
    <!-- container-scroller -->
      @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>