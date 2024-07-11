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
        <div class="container" style="color:black; padding-top:50px" align="center" >
            <div align="center" style="padding-top:100px;">
        <h1>Registered Participants</h1>
          <table>
            <tr style="background-color:black;">
            <th style="padding:10px; color:white;">ID</th>
            <th style="padding:10px; color:white;">Username</th>
            <th style="padding:10px; color:white;">First Name</th>
            <th style="padding:10px; color:white;">Last Name</th>
            <th style="padding:10px; color:white;">Email</th>
            <th style="padding:10px; color:white;">Date of Birth</th>
            <th style="padding:10px; color:white;">School Reg. No</th>
            <th style="padding:10px; color:white;">Image Path</th>
            <th style="padding:10px; color:white;">Status</th>
        </tr>
        @foreach ($data as $participant)
        <tr style="background-color:skyblue;" align="center">
            <td>{{ $participant->id }}</td>
            <td>{{ $participant->username }}</td>
            <td>{{ $participant->firstname }}</td>
            <td>{{ $participant->lastname }}</td>
            <td>{{ $participant->email }}</td>
            <td>{{ $participant->date_of_birth }}</td>
            <td>{{ $participant->registration_number }}</td>
            <td>{{ $participant->image_path }}</td>
            <td>{{ $participant->status }}</td>
        </tr>
        @endforeach
    </table>
    </div>
    </div>
    <!-- container-scroller -->
      @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>