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
        <div class="container-fluid page-body-wrapper">

         <div class="container"  style="color:black; padding-top:20px;" align="center">

         @if(session()->has('message'))
        <div class="alert alert-success">
          <button type="button" class="close" data-dismiss="alert">
             X
          </button>
          {{session()->get('message')}}

        </div>
        @endif

           <!-- <form action="{{url('add_challenges')}}" method="POST" enctype="multipart/form-data" align="center">
            @csrf
            <div style="padding:15px;">
              <label for="">Title:</label>
              <input type="text" name="title" placeholder="Enter challenge title!" require="" required="">
            </div>

            <div style="padding:15px;">
              <label for="">Start Date</label>
              <input type="text" name="start_date" placeholder="Enter start date" required="">
            </div>

            <div style="padding:15px;">
              <label for="">End Date:</label>
              <input type="text" name="end_date" placeholder="Enter end date" required="">
            </div>

            <div style="padding:15px;">
              <label for="">Duration time:</label>
              <input type="text" name="duration" placeholder="Enter duration" required="">
            </div>

            <div style="padding:15px;">
              <label for="">Number of questions:</label>
              <input type="text" name="num_questions" placeholder="Put number of questions" required="">
            </div>

            <div style="padding:15px">
              <input type="submit" class="btn btn-success">
            </div>
            
           </form> -->

           <form action="{{ route('admin.import') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div style="padding:15px;">
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" required>
        </div>
        <div style="padding:15px;">
            <label for="start_date">Start Date:</label>
            <input type="date" name="start_date" id="start_date" required>
        </div>
        <div style="padding:15px;">
            <label for="end_date">End Date:</label>
            <input type="date" name="end_date" id="end_date" required>
        </div >
        <div style="padding:15px;">
            <label for="duration">Duration (in minutes):</label>
            <input type="number" name="duration" id="duration" required>
        </div>
        <div style="padding:15px;">
            <label for="num_questions">Number of Questions:</label>
            <input type="number" name="num_questions" id="num_questions" required>
        </div>
        <div style="padding:15px;">
            <label for="questions">Questions File:</label>
            <input type="file" name="questions" id="questions" required>
        </div>
        <div style="padding:15px;">
            <label for="answers">Answers File:</label>
            <input type="file" name="answers" id="answers" required>
        </div>
        <button type="submit" class="btn btn-success">Import Challenge</button>
    </form>


         </div>
        </div>
    <!-- container-scroller -->
      @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>