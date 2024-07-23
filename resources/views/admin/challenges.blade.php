<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Challenges</title>
    <!-- Include CSS -->
    @include('admin.css')
</head>
<body>
    <!-- Include other layout components -->
    @include('admin.arrange')
    @include('admin.sidebar')
    @include('admin.navbar')

    <div class="container-fluid page-body-wrapper">
        <div class="container mt-4">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header">
                            <h2>Challenges</h2>
                        </div>
                        <div class="card-body">
                            @if($challenges->isEmpty())
                                <div class="alert alert-info">
                                    No challenges available.
                                </div>
                            @else
                                <div class="table-responsive">
                                    <table class="table table-hover table-bordered">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>Challenge Number</th>
                                                <th>Start Date</th>
                                                <th>End Date</th>
                                                <th>Duration (minutes)</th>
                                                <th>Number of Questions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($challenges as $challenge)
                                                <tr class="challenge-row" data-challenge-id="{{ $challenge->id }}">
                                                    <td>{{ $challenge->challengeNumber }}</td>
                                                    <td>{{ $challenge->start_date }}</td>
                                                    <td>{{ $challenge->end_date }}</td>
                                                    <td>{{ $challenge->duration }}</td>
                                                    <td>{{ $challenge->num_questions }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Include JavaScript -->
    @include('admin.script')

    <script>
        // Add click event listener to table rows with class 'challenge-row'
        document.addEventListener('DOMContentLoaded', function () {
            const rows = document.querySelectorAll('.challenge-row');
            rows.forEach(row => {
                row.addEventListener('click', function () {
                    const challengeId = this.getAttribute('data-challenge-id');
                    // Redirect to a route for detailed challenge view, modify as per your application's routing
                    window.location.href = `/challenge/${challengeId}/questions`;
                });
            });
        });
    </script>
</body>
</html>
