<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.css')
</head>
<body>
    @include('admin.arrange')
    @include('admin.sidebar')
    @include('admin.navbar')
    <!-- <div class="container-scroller"> -->
        <!-- partial:partials/_navbar.html -->

        <!-- partial -->
        <!-- <div class="main-panel"> -->
          <!-- <div class="content-wrapper"> -->

    <div class="container-fluid page-body-wrapper">
        <div class="container" style="color:black; padding-top:50px" align="center">
            @if(session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">X</button>
                    {{ session()->get('message') }}
                </div>
            @endif

            @if(session()->has('error'))
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert">X</button>
                    {{ session()->get('error') }}
                </div>
            @endif

            <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="questions">Questions File:</label>
    <input type="file" name="questions" accept=".xlsx"><br>
    <label for="answers">Answers File:</label>
    <input type="file" name="answers" accept=".xlsx"> <br>
    <button type="submit" class="btn btn-success">Upload</button>
</form>

        </div>


    </div>
</div>
</div>


    @include('admin.script')
</body>
</html>
