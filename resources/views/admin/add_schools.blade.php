<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')
    <style type="text/css">
        label {
            display: inline-block;
            width: 200px;
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
            @if (session()->has('message'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    {{ session()->get('message') }}
                </div>
            @endif

            <div class="page-header">
                <h2>Schools</h2>
                <a href="{{ route('uploadschool') }}" class="btn btn-primary">Add School</a>
            </div>


            @if ($schools->isEmpty())
                <div class="alert alert-info">
                    No schools available.
                </div>
            @else
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th>School Name</th>
                                <th>District</th>
                                <th>Registration Number</th>
                                <th>Representative name</th>
                                <th>Representative email</th>
                            </tr>
                        </thead>

                        @foreach ($schools as $school)
                            <tr class="challenge">
                                <td>{{ $school->name }}</td>
                                <td>{{ $school->district }}</td>
                                <td>{{ $school->registration_number }}</td>
                                <td>{{ $school->representative_name }}</td>
                                <td>{{ $school->representative_email }}</td>

                            </tr>
                        @endforeach

                    </table>
                </div>
            @endif
        </div>

    </div>

    <!-- Optional: JavaScript for form validation -->
    <!-- container-scroller -->
    @include('admin.script')
    <!-- End custom js for this page -->
</body>

</html>
