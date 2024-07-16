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
             <h1>Registered Participants</h1>
            <table class="table table-bordered table-primary text-dark">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Username</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Date of Birth</th>
                    <th scope="col">student Number</th>
                    <th scope="col">Image Path</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $participant)
                <tr>
                    <td>{{ $participant->id }}</td>
                    <td>{{ $participant->username }}</td>
                    <td>{{ $participant->firstname }}</td>
                    <td>{{ $participant->lastname }}</td>
                    <td>{{ $participant->email }}</td>
                    <td>{{ $participant->date_of_birth }}</td>
                    <td>{{ $participant->studentNumber }}</td>
                    <td>{{ $participant->image_path }}</td>
                    <td>{{ $participant->status }}</td>
                </tr>
                @endforeach
                </tbody>
               </table>
              </div>
            </div>


    <!--------Body --------->        
    <!-- container-scroller -->
      @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>