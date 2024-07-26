<!-- resources/views/admin/worst-schools.blade.php -->
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
            <form action="{{ url('search-challenge') }}" class="form-inline justify-content-center">
                <label for="challengeNumber" class="sr-only">Challenge Number</label>
                <input type="text" id="challengeNumber" name="challengeNumber" class="form-control mb-2 mr-sm-2" placeholder="Enter your challenge number">
                <button type="submit" class="btn btn-primary mb-2">Search</button>
            </form>
        </div>
    </div>
    
    @include('admin.script') <!-- Include scripts if necessary -->
</body>
</html>
