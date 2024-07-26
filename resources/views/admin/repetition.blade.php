<!DOCTYPE html>
<html lang="en">
<head>
    <title>Repetition of Questions</title>
    @include('admin.css')
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> --}}
    <style>
        /* body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        } */

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
        <div class="container mt-5" align="center">
            <h1 class="text-center mb-4">Repetition of Questions</h1>
            @if ($repetitionData->isEmpty())
                <div class="alert alert-info">
                    No data available.
                </div>
            @else
                <table class="table table-bordered">
                    <thead>
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
            @endif
        </div>
    </div>
    
    @include('admin.script')
</body>
</html>
