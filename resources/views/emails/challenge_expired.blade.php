<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Challenge Questions and Answers</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            max-width: 800px;
            margin: 20px auto;
            background-color: #ffffff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            border-radius: 8px;
        }

        .header {
            text-align: center;
            padding-bottom: 20px;
        }

        .header h2 {
            margin: 0;
            color: #007bff;
        }

        .table-responsive {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }

        table th,
        table td {
            padding: 12px;
            border: 1px solid #dee2e6;
            text-align: left;
        }

        table thead {
            background-color: #343a40;
            color: #ffffff;
        }

        table tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 12px;
            color: #888888;
        }

        .footer a {
            color: #007bff;
            text-decoration: none;
        }

        .footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h2>Questions and Answers for Challenge {{ $challenge->challengeNumber }}</h2>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Question</th>
                        <th>Answer</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($questionsWithAnswers as $qa)
                        <tr>
                            <td>{{ $qa['question'] }}</td>
                            <td>{{ $qa['answer'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="footer">
            <p>Thank you for participating in the challenge!</p>
            <p><a href="https://yourwebsite.com">Visit our website</a> for more challenges and updates.</p>
        </div>
    </div>
</body>

</html>
