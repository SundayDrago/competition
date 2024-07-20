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
          
        <div class="container mt-4">
        <h1>Performance Data</h1>

        <!-- Table for Performance Data -->
        <div class="mb-4">
            <h2>Performance Table</h2>
            <table class="table  table-bordered table-hover">
                <thead>
                    <tr>
                        <th>School</th>
                        <th>Year</th>
                        <th>Average Score</th>
                        <th>Total Attempts</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($performances as $performance)
                    <tr>
                        <td>{{ $performance->school ? $performance->school->name : 'N/A' }}</td>
                        <td>{{ $performance->year }}</td>
                        <td>{{ $performance->average_score }}</td>
                        <td>{{ $performance->total_attempts }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!-- container-scroller -->
      @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html> 