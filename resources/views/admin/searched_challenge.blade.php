<!DOCTYPE html>
<html lang="en">
<head>
    <title>Worst Performing Schools</title>
    @include('admin.css') <!-- Include your CSS file or styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    @include('admin.arrange') <!-- Include necessary layout arrangements -->
    @include('admin.sidebar') <!-- Include sidebar if applicable -->
    @include('admin.navbar') <!-- Include navigation bar if applicable -->

    <div class="container-fluid page-body-wrapper">
        <div class="container mt-5" align="center">
            <h1 class="text-center mb-4">Search for a Challenge Using Challenge Number</h1>
            <form action="{{ url('search-challenge') }}" method="GET" class="form-inline justify-content-center">
                <label for="challengeNumber" class="sr-only">Challenge Number</label>
                <input type="text" id="challengeNumber" name="challengeNumber" class="form-control mb-2 mr-sm-2" placeholder="Enter your challenge number">
                <button type="submit" class="btn btn-primary mb-2">Search</button>
            </form>

            @if(isset($schoolDetailsList))
                <div class="mt-4">
                    <h2>Worst Performing Schools Details</h2>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>District</th>
                                <th>Challenge Number</th>
                                 <!-- <th>Average Score</th>  -->
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($schoolDetailsList as $schoolDetails)
                                <tr>
                                    <td>{{ $schoolDetails['name'] }}</td>
                                    <td>{{ $schoolDetails['district'] }}</td>
                                    <td>{{ $schoolDetails['challengeNumber'] }}</td>
                                    <!-- <td>{{ $schoolDetails['average_score'] }}</td>  -->
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @elseif(isset($error))
                <div class="mt-4 alert alert-danger">
                    {{ $error }}
                </div>
            @endif
        </div>
    </div>
    
    @include('admin.script') <!-- Include scripts if necessary -->
</body>
</html>
