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
                        <th>Year</th>
                        <th>Average Score</th>
                        <th>Total Attempts</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($performances as $performance)
                    <tr>
                        <td>{{ $performance->year }}</td>
                        <td>{{ $performance->average_score }}</td>
                        <td>{{ $performance->total_attempts }}</td>
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

    <!-- Bootstrap JS and dependencies (Popper.js and jQuery) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var ctx = document.getElementById('performanceChart').getContext('2d');
            var performanceChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: @json($performances->pluck('year')),
                    datasets: [
                        {
                            label: 'Average Score',
                            backgroundColor: 'rgba(54, 162, 235, 0.2)',
                            borderColor: 'rgba(54, 162, 235, 1)',
                            borderWidth: 1,
                            data: @json($performances->pluck('average_score')),
                            fill: false, // Line chart should not fill the area under the line
                        }
                    ]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        });
    </script>

    @include('admin.script') <!-- Your custom JS -->
</body>
</html>
