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
    <div class="container" style="color: black; padding-top: 50px;" align="center">
        @if(session()->has('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            {{ session()->get('message') }}
        </div>
        @endif

        <form action="{{ url('addschool') }}" method="POST" enctype="multipart/form-data" class="needs-validation"
            novalidate>
            @csrf
            <div class="form-group row">
                <label for="name" class="col-sm-4 col-form-label text-right">School Name</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter School name here!"
                        required>
                    <div class="invalid-feedback">
                        Please enter the school name.
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <label for="school_district" class="col-sm-4 col-form-label text-right">School District</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="school_district" name="school_district"
                        placeholder="Enter School district here!" required>
                    <div class="invalid-feedback">
                        Please enter the school district.
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <label for="registration_number" class="col-sm-4 col-form-label text-right">Registration Number</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="registration_number" name="registration_number"
                        placeholder="Enter Registration No!" required>
                    <div class="invalid-feedback">
                        Please enter the registration number.
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <label for="representative_name" class="col-sm-4 col-form-label text-right">Representative Name</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="representative_name" name="representative_name"
                        placeholder="Representative name!" required>
                    <div class="invalid-feedback">
                        Please enter the representative name.
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <label for="representative_email" class="col-sm-4 col-form-label text-right">Representative Email</label>
                <div class="col-sm-8">
                    <input type="email" class="form-control" id="representative_email" name="representative_email"
                        placeholder="Representative email!" required>
                    <div class="invalid-feedback">
                        Please enter a valid email address.
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-12">
                    <button type="submit" class="btn btn-success btn-block">Submit</button>
                </div>
            </div>
        </form>
    </div>
   </div>
   <!-- Optional: JavaScript for form validation -->
    <!-- container-scroller -->
      @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>