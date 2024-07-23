<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.head')
    <title>TechEducation Admin</title>
    <style>
        .container {
            width: 640px;
            padding: 40px 40px;
        }
    </style>
  </head>
  <body>

    <!-- partial:partials/_sidebar.html -->
    @include('admin.sidebar')
    <!-- partial -->
            <!-- partial:partials/_navbar.html -->
            @include('admin.navbar')
            <!-- partial -->
            <div class="main-panel">
                 <div class="container-wrapper mt-5 d-flex justify-content-center align-items-center" >
                     <div class="col-md-6">
                        @if(session()->has('success'))
                            <div class="alert alert-success alert-dismissible" role="alert">
                                {{session()->get('success')}}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">X</button>
                            </div>
                        @endif
                        <h1 class="text-center">Upload Answers</h1>
                        <form action="{{url('uploadingAnswers')}}" class="mt-10" method="POST" enctype="multipart/form-data" class="mb-5">
                            @csrf
                            <div class="mt-4">
                                <input type="file" name="answers_file" accept=".xlsx, .xls" required class="btn btn-primary">
                            </div>
                            <br>
                            <div class="mt-4 d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary">Upload Answers</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>  
    <!-- container-scroller -->
    @include('admin.script')
   
  </body>
</html>