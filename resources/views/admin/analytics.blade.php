<!DOCTYPE html>
<html lang="en">
<head>
    <title>TechEducation Admin - Analytics</title>
    @include('admin.css')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    @include('admin.arrange')
    @include('admin.sidebar')
    @include('admin.navbar')

    <div class="container-fluid page-body-wrapper">
        <div class="container mt-5" style="color: black;" align="center">
            @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible" role="alert">
                {{session()->get('success')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">X</button>
            </div>
            @endif
            <h1 class="text-center mb-4">Analytics for Most Correctly Answered Questions</h1>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Question</th>
                        <th>Rank</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($results as $result)
                    <tr>
                        <td>{{ $result['question_text'] }}</td>
                        <td>{{ $result['rank'] }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    
    @include('admin.script')
</body>
</html>
