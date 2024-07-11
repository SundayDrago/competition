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
            <th style="padding:10px; color:white;">School ID</th>
            <th style="padding:10px; color:white;">Representative Name</th>
            <th style="padding:10px; color:white;">Representative Email</th>
        </tr>
        @foreach ($data1 as $representative)
        <tr style="background-color:skyblue;" align="center">
            <td>{{ $representative->id }}</td>
            <td>{{ $representative->school_id }}</td>
            <td>{{ $representative->representative_name }}</td>
            <td>{{ $representative->representative_email }}</td>
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