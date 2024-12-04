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
    <div class="main-panel">
    <div class="container-wrapper mt-5 d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="col-md-6">
            <h2 class="text-white text-center">Import Questions and Answers</h2>

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            <form action="{{ url('import_files') }}" method="POST" class="mt-3" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="questions_file" class="form-label text-white">Upload Questions File</label>
                    <input type="file" class="form-control" id="questions_file" name="questions_file" required>
                </div>
                <!-- <div class="mb-3">
                    <label for="answers_file" class="form-label">Upload Answers File(answers.xlsx)</label>
                    <input type="file" class="form-control" id="answers_file" name="answers_file" required="">
                </div> -->
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary">Import Questions</button>
                </div>
            </form>
        </div>
    </div>
</div>


    <!---container-scroller------------>
    <!---------Footer----------->
    @include('admin.script')
    <!-- End custom js for this page -->
</body>
</html>
