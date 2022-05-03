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
    

                <form action="{{url('editdoctor', $data->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="" style="padding: 15px;">
                        <label for="doctor name">Doctor Name:</label>
                        <input type="text" name="name" placeholder="Write the Doctor's Name" style="color:black;" required value="{{$data->name}}">
                    </div>

                    <div class="" style="padding: 15px;">
                        <label for="phone">phone:</label>
                        <input type="number" name="phone" placeholder="Write the Mobile Number" style="color:black;" required value="{{$data->phone}}">
                    </div>

                    <div class="" style="padding: 15px;">
                        <label>Speciality:</label>
                       <select name="speciality"  style="color:black; width:200px;">

                            <option selected disabled>--Select--</option>
                            <option value="Skin">Skin</option>
                            <option value="Heart">Heart</option>
                            <option value="Eye">Eye</option>
                            <option value="Nose">Nose</option>

                       </select>

                    </div>

                    <div class="" style="padding: 15px;">
                        <label>Room No.:</label>
                        <input type="text" name="room" placeholder="Write Room Number" style="color:black;" required value="{{$data->room}}">
                    </div>
                    

                    <div class="" style="padding: 15px;">
                        <label>Old Image:</label>
                        <img height="150" width="150" src="doctorsImages/{{$data->image}}" alt="">
                    </div>

                    <div class="" style="padding: 15px;">
                        <label>Change Image:</label>
                        <input type="file" name="file" >
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