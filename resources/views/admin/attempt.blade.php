<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css') 
    
  </head>
  <body>
       @include('admin.arrange')
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')
        <!-- partial -->
        <div class="container mt-5">
        <h1 class="mb-4">Attempts</h1>
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th>Challenge Number</th>
                        <th>Username</th>
                        <th>Student Number</th>
                        <th>Score</th>
                        <th>is Complete</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($attempts as $attempt)
                        <tr>
                            <td>{{ $attempt->challengeNumber }}</td>
                            <td>{{ $attempt->username }}</td> 
                            <td>{{ $attempt->studentNumber }}</td>
                            <td>{{ $attempt->score }}</td>
                            <td>{{ $attempt->isComplete ? 'Yes' : 'No' }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center">No attempts found</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
    <!-- container-scroller -->
      @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>