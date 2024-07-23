<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.css') 
</head>
<body>
    @include('admin.arrange')
    @include('admin.sidebar')
    @include('admin.navbar')

    <!-- Main Content -->
    <div class="main-panel">
        <div class="content-wrapper">
            <!-- Display Success or Error Messages -->
            @if (session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif

            <!-- Challenge Creation Form -->
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-white">Create a New Challenge</h1>
                    <form action="{{ url('post_challenges') }}" class="mt-10" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="challengeNumber" class="text-white">Challenge Number</label>
                            <input type="number" name="challengeNumber" id="challengeNumber" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="num_questions" class="text-white">Number of Questions</label>
                            <input type="number" name="num_questions" id="num_questions" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="start_date" class="text-white">Start Date</label>
                            <input type="date" name="start_date" id="start_date" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="end_date" class="text-white">End Date</label>
                            <input type="date" name="end_date" id="end_date" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="duration" class="text-white">Duration (minutes)</label>
                            <input type="number" name="duration" id="duration" class="form-control" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Create Challenge</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    @include('admin.script')
</body>
</html>
