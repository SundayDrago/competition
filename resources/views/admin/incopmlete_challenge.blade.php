<!DOCTYPE html>
<html lang="en">
<head>
    <title>Incomplete Challenges</title>
    @include('admin.css')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }

        .table thead th {
            background-color: #343a40;
            color: white;
            font-weight: bold;
        }

        .table tbody td {
            background-color: white;
            color: black;
        }

        .table tbody tr {
            background-color: white;
        }

        .container-fluid.page-body-wrapper {
            padding-top: 50px;
        }

        h1.text-center {
            color: #343a40;
            font-size: 2.5em;
            font-weight: bold;
        }

        .table {
            border: 1px solid #343a40;
        }

        .table-bordered th,
        .table-bordered td {
            border: 1px solid #343a40;
        }
    </style>
</head>
<body>
    @include('admin.arrange')
    @include('admin.sidebar')
    @include('admin.navbar')

    <div class="container-fluid page-body-wrapper">
        <div class="container mt-5" align="center">
            <h1 class="text-center mb-4">Incomplete Challenges</h1>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Student Number</th>
                        <th>Challenge Number</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($incompleteChallenges as $challenge)
                        <tr>
                            <td>{{ $challenge->firstname }}</td>
                            <td>{{ $challenge->lastname }}</td>
                            <td>{{ $challenge->studentNumber }}</td>
                            <td>{{ $challenge->challengeNumber }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    
    @include('admin.script')
</body>
</html>
