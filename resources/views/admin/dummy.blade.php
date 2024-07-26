<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css') 
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> --}}
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }

        .table tbody tr:hover {
            cursor: pointer;
        }

        .table tbody td {
            vertical-align: middle;
        }

        .table-bordered {
            border: 1px solid #dee2e6;
        }

        .table td,
        .table th {
            color: #333;
        }

        .container-fluid.page-body-wrapper {
            padding-top: 50px;
        }

        .page-header {
            padding-top: 20px;
            padding-bottom: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .page-header h2 {
            font-size: 2rem;
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

        .table {
            border: 1px solid #343a40;
        }

        .table-bordered th,
        .table-bordered td {
            border: 1px solid #343a40;
        }

        .alert-info {
            margin-top: 20px;
        }
    </style>
</head>

<body>
    @include('admin.arrange')
    @include('admin.sidebar')
    @include('admin.navbar')

    <div class="container-fluid page-body-wrapper">
        <div class="container mt-5">
            <div class="page-header">
                <h2>Repetition of Questions</h2>
            </div>

            @if ($repetitionData->isEmpty())
                <div class="alert alert-info">
                    No data available.
                </div>
            @else
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th>Question Text</th>
                                <th>Repetition Count</th>
                                <th>Percentage</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($repetitionData as $data)
                                <tr>
                                    <td>{{ $data['question_text'] }}</td>
                                    <td>{{ $data['count'] }}</td>
                                    <td>{{ number_format($data['percentage'], 2) }}%</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </div>
    </div>

    
</body>

</html>
