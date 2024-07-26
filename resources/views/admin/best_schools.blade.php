<!-- resources/views/admin/best_performing_schools.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Best Performing Schools</title>
    @include('admin.css')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    @include('admin.arrange')
    @include('admin.sidebar')
    @include('admin.navbar')

    <div class="container-fluid page-body-wrapper">
        <div class="container mt-5" style="color: black;" align="center">
            <h1 class="text-center mb-4">Best Performing Schools</h1>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>School Name</th>
                        <th>District</th>
                        <th>Registration Number</th>
                        <th>Average Marks</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($bestSchools as $school)
                        <tr>
                            <td>{{ $school['name'] }}</td>
                            <td>{{ $school['district'] }}</td>
                            <td>{{ $school['registration_number'] }}</td>
                            <td>{{ $school['average_marks'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    
    @include('admin.script')
</body>
</html>
