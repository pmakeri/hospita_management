<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
     
      <!-- partial:partials/_sidebar.html -->
     @include('admin.sidebar')
      <!-- partial -->
      

      @include('admin.navbar')
        <!-- partial -->

       
        <div class="container-fluid page-body-wrapper">
          <div style="padding-top: 20px;">

            <div>
              @if(session()->has('message'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <strong>{{session()->get('message')}}</strong>
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">X</button>
              </div>
              @endif
            </div>

            <table>

                <thead>

                    <tr>

                        <th style="padding: 10px;"  >Doctor Name</th>
                        <th style="padding: 10px;" >Phone Number</th>
                        <th style="padding: 10px;" >Speciality</th>
                        <th style="padding: 10px;" >Room</th>
                        <th style="padding: 10px;" >Picture</th>
                        <th style="padding: 10px;" >Delete</th>
                        <th style="padding: 10px;" >Update
                </thead>

                <tbody>

                    @foreach ($data as $doctors)
                                               
                    <tr align="center">
                        <td>{{$doctors->name}}</td>
                        <td>{{$doctors->phone}}</td>
                        <td>{{$doctors->speciality}}</td>
                        <td>{{$doctors->room}}</td>
                        <td> 
                          <img height="100" width="100" src="doctorsImages/{{$doctors->image}}" alt="">
                        </td>

                        <td>
                          <a onclick="return confirm('Are you sure you want to Delete This Doctor?')" class="btn btn-danger" href="{{url('delete', $doctors->id)}}">Delete</a>
                      </td>

                      <td>
                          <a class="btn btn-success" href="{{url('updatedoctor', $doctors->id)}}">Update
                      </td>
                       
                    </tr>
                    
                    @endforeach
                    
                </tbody>

            </table>
        </div>

            
        </div>

    <!-- container-scroller -->
    <!-- plugins:js -->
   @include('admin.script')
    <!-- End custom js for this page -->
    </div>
  </body>
</html>