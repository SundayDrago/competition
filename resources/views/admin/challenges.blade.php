<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css') 
    
  </head>
  <body>
       @include('admin.arrange')
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')
        <!-- partial -->
            <div class="container-fluid page-body-wrapper">
            <div class="container" style="color:black; padding-top:20px;">
            <div class="row justify-content-center">
            <div class="col-md-6">
                @if(session()->has('message'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{session()->get('message')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif

                <form action="{{ route('admin.import') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="title">Title:</label>
                        <input type="text" class="form-control" name="title" id="title" required>
                    </div>
                    <div class="form-group">
                        <label for="start_date">Start Date:</label>
                        <input type="date" class="form-control" name="start_date" id="start_date" required>
                    </div>
                    <div class="form-group">
                        <label for="end_date">End Date:</label>
                        <input type="date" class="form-control" name="end_date" id="end_date" required>
                    </div>
                    <div class="form-group">
                        <label for="duration">Duration (in minutes):</label>
                        <input type="number" class="form-control" name="duration" id="duration" required>
                    </div>
                    <div class="form-group">
                        <label for="num_questions">Number of Questions:</label>
                        <input type="number" class="form-control" name="num_questions" id="num_questions" required>
                    </div>
                    <div class="form-group">
                        <label for="questions">Questions File:</label>
                        <input type="file" class="form-control-file" name="questions" id="questions" required>
                    </div>
                    <div class="form-group">
                        <label for="answers">Answers File:</label>
                        <input type="file" class="form-control-file" name="answers" id="answers" required>
                    </div>
                    <button type="submit" class="btn btn-success btn-block">Import Challenge</button>
                </form>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    <!-- container-scroller -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>