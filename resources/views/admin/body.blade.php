<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Challenge Status</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        /* Include the updated CSS here */
        .container {
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: 20px auto;
            width: 90%;
        }

        .card {
            background-color: #ffffff;
            /* Ensure the card has a white background */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card-body {
            padding: 20px;
        }

        .text-center {
            text-align: center;
        }

        .mb-0 {
            margin-bottom: 0;
        }

        .ms-2 {
            margin-left: 0.5rem;
        }

        .font-weight-medium {
            font-weight: 200;
        }

        /* Adding custom styles for text visibility */
        h3 {
            color: #333;
            /* Darker color for better contrast */
        }

        p {
            color: #333;
            /* Darker color for better contrast */
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>
    <div class="container-scroller">
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <h3 class="mb-0"> {{ $schoolCount }}</h3>
                                        <p class="ms-2 mb-0 font-weight-medium">Registered Schools</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <h3 class="mb-0">{{ $participants }}</h3>
                                        <p class="ms-2 mb-0 font-weight-medium">Total participants</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <h3 class="mb-0">{{ $rejected }}</h3>
                                        <p class="ms-2 mb-0 font-weight-medium">Rejected Applicants</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12 grid-margin card-center">
                        <div class="card" style="background-color: #c0c0c0;">
                            <div class="card-body card-body-center">
                                <h1>Challenge Statuses</h1>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Challenge Number</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($challengeStatuses as $challenge)
                                            <tr>
                                                <td>{{ $challenge->challengeNumber }}</td>
                                                <td>{{ $challenge->status }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 grid-margin card-center">
                        <div class="card">
                            <div class="card-body card-body-center">
                                <canvas id="studentsChart"></canvas>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 grid-margin card-center">
                        <div class="card">
                            <div class="card-body card-body-center">
                                <canvas id="challengeStatusChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script>
        const studentsChartCtx = document.getElementById('studentsChart').getContext('2d');

        const studentCounts = @json($studentCounts);

        const labels = Object.keys(studentCounts);
        const data = Object.values(studentCounts);

        const studentsData = {
            labels: labels,
            datasets: [{
                label: 'Students per School',
                data: data,
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            }]
        };

        const studentsChart = new Chart(studentsChartCtx, {
            type: 'bar',
            data: studentsData,
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        // Pie chart for challenge statuses
        const challengeStatusChartCtx = document.getElementById('challengeStatusChart').getContext('2d');

        const challengeStatuses = @json($challengeStatuses);

        const expiredCount = challengeStatuses.filter(status => status.status === 'Expired').length;
        const openCount = challengeStatuses.filter(status => status.status === 'Available').length;
        const Pending = challengeStatuses.filter(status => status.status === 'Pending').length;

        const challengeStatusData = {
            labels: ['Expired Challenges', 'Open Challenges', 'Pending'],
            datasets: [{
                data: [expiredCount, openCount, Pending],
                backgroundColor: ['rgba(255, 99, 132, 0.2)', 'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 170, 80, 0.5)'],
                borderColor: ['rgba(255, 99, 132, 1)', 'rgba(54, 162, 235, 1)'],
                borderWidth: 1
            }]
        };

        const challengeStatusChart = new Chart(challengeStatusChartCtx, {
            type: 'pie',
            data: challengeStatusData,
            options: {
                responsive: true
            }
        });
    </script>
</body>

</html>
