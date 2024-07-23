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

    <div class="container mt-5">
        <h2>Import Answers</h2>

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

        <form action="{{ url('import_answers') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="answers_file" class="form-label">Upload Answers File</label>
                <input type="file" class="form-control" id="answers_file" name="answers_file" required>
            </div>
            <button type="submit" class="btn btn-primary">Import Answer</button>
        </form>
    </div>

    <!---container-scroller------------>
    <!-- Footer -->
    @include('admin.script')
    <!-- End custom js for this page -->
</body>
</html>
