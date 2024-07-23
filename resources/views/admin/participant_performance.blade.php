<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    @include('admin.css')  <!-- Your custom CSS -->

    <style>
        /* Ensure text color is visible */
        .table td {
            color: #000; /* Black text color */
        }
    </style>
</head>
<body>
    @include('admin.arrange')
    @include('admin.sidebar')
    @include('admin.navbar')

    <div class="container mt-4">
        <h1>Participant Performance Over Years</h1>

        <!-- Table for Performance Data -->
        <div class="mb-4">
            <h2>Performance Table</h2>
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Participant ID</th>
                        <th>School ID</th>
                        <th>Username</th>
                        <th>Year</th>
                        <th>Student Number</th>
                        <th>Score</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($participant_performance as $participant_performance)
                    <tr>
                        <td>{{ $participant_performance->participant_id }}</td>
                        <td>{{ $participant_performance->school_id }}</td>
                        <td>{{ $participant_performance->username }}</td>
                        <td>{{ $participant_performance->year }}</td>
                        <td>{{ $participant_performance->studentNumber }}</td>
                        <td>{{ $participant_performance->score }}</td>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Graph for Performance Data -->
        <div class="mb-4">
            <h2>Performance Graph</h2>
            <canvas id="performanceChart"></canvas>
        </div>
    </div>


    @include('admin.script') <!-- Your custom JS -->
</body>
</html>
