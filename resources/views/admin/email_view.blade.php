<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <base href="/public">
    @include('admin.css')

    <style>

        label, input{
            display: inline-block;
            width:200px;
        }
        
    </style>

  </head>
  <body>
    <div class="container-scroller">
     
      <!-- partial:partials/_sidebar.html -->
     @include('admin.sidebar')
      <!-- partial -->
      

      @include('admin.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">

         
            <div class="container" align="center" style="padding: 100px;">

                @if(session()->has('message'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{session()->get('message')}}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">X</button>
                </div>
                @endif
    

                <form action="{{url('sendemail', $data->id)}}" method="POST"> 
                    @csrf

                    <div class="" style="padding: 15px;">
                        <label for="greeting">Greeting:</label>
                        <input type="text" name="greeting"  style="color:black;" required>
                    </div>

                    <div class="" style="padding: 15px;">
                        <label for="body">Body:</label>
                        <input type="text" name="body" style="color:black;" required>
                    </div>

                  

                    <div class="" style="padding: 15px;">
                        <label>Action Text:</label>
                        <input type="text" name="actiontext" style="color:black;" required>
                    </div>

                    <div class="" style="padding: 15px;">
                        <label>Action URL:</label>
                        <input type="text" name="actionurl" style="color:black;" required>
                    </div>

                    <div class="" style="padding: 15px;">
                        <label>End Part:</label>
                        <input type="text" name="endpart" style="color:black;" required>
                    </div>

                  
                    <div class="" style="padding: 15px;">
                       
                        <input class="btn btn-success" type="submit">
                    </div>
                </form>


            </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
   @include('admin.script')
    <!-- End custom js for this page -->
    </div>
  </body>
</html>