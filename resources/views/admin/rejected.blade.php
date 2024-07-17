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
         <!-----------Body-------------->
<div class="container mt-5" align="center">
    <div align="center" class="pt-5">
        <h1>Rejected Participants</h1>
        <table class="table table-bordered table-primary text-dark">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Username</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Date of Birth</th>
                    <th scope="col">Student Number</th>
                    <th scope="col">Image File</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $rejected)
                <tr>
                    <td>{{ $rejected->id }}</td>
                    <td>{{ $rejected->username }}</td>
                    <td>{{ $rejected->firstname }}</td>
                    <td>{{ $rejected->lastname }}</td>
                    <td>{{ $rejected->email }}</td>
                    <td>{{ $rejected->date_of_birth }}</td>
                    <td>{{ $rejected->studentNumber }}</td>
                    <td>{{ $rejected->image_file }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<!--------Body Ends--------->



    <!-- container-scroller -->
      @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>