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
      <div class="container mt-5">
    <h2>Import Questions and Answers</h2>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ url('import_files') }}" method="get" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="questions_file" class="form-label">Upload Questions File(questions.xlsx)</label>
            <input type="file" class="form-control" id="questions_file" name="questions_file" required="">
        </div>
        <div class="mb-3">
            <label for="answers_file" class="form-label">Upload Answers File(answers.xlsx)</label>
            <input type="file" class="form-control" id="answers_file" name="answers_file" required="">
        </div>
        <button type="submit" class="btn btn-primary">Import Files</button>
    </form>
   </div>

      <!---container-scroller------------>
      <!---------Footer----------->

      @include('admin.script')
      <!-- End custom js for this page -->
  </body>
</html>