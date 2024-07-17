<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css') 
    
  </head>
  <body>
      @include('admin.arrange')
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-------------partial------------->
      @include('admin.navbar')
      <!-------------partial------------->

      <div class="container mt-4">
    <div class="card">
        <div class="card-header">Upload Files</div>
        <div class="card-body">
            @if(session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
            @endif

            <form action="{{ route('upload') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="questions_file">Upload Questions File:</label>
                    <input type="file" class="form-control-file" name="questions_file" id="questions_file">
                </div>
                <div class="form-group">
                    <label for="answers_file">Upload Answers File:</label>
                    <input type="file" class="form-control-file" name="answers_file" id="answers_file">
                </div>
                <button type="submit" class="btn btn-primary">Upload Files</button>
            </form>
        </div>
    </div>
</div>



      <!---container-scroller------------>
      @include('admin.script')
      <!-- End custom js for this page -->
  </body>
</html>