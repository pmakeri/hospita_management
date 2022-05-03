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
  
        <div class="container">
            <div style="padding-top: 100px;">
                <table>

                    <thead>

                        <tr>

                            <th style="padding: 10px;"  >Customer Name</th>
                            <th style="padding: 10px;" >Email</th>
                            <th style="padding: 10px;" >Phone</th>
                            <th style="padding: 10px;" >Doctor Name</th>
                            <th style="padding: 10px;" >Date</th>
                            <th style="padding: 10px;" >Message</th>
                            <th style="padding: 10px;" >Status</th>
                            <th style="padding: 10px;" >Approve</th>
                            <th style="padding: 10px;" >Cancel</th>
                            <th style="padding: 10px;" >Send Mail</th>
                        </tr>
                    </thead>

                    <tbody>

                        @foreach ($appoint as $appoints)
                                                   
                        <tr>
                            <td>{{$appoints->name}}</td>
                            <td>{{$appoints->email}}</td>
                            <td>{{$appoints->phone}}</td>
                            <td>{{$appoints->doctor}}</td>
                            <td>{{$appoints->date}}</td>
                            <td>{{$appoints->message}}</td>
                            <td>{{$appoints->status}}</td>
                            <td>
                                <a class="btn btn-success" href="{{url('approved', $appoints->id)}}">Approved</a>
                            </td>

                            <td>
                                <a class="btn btn-danger" href="{{url('canceled', $appoints->id)}}">Canceled</a>
                            </td>

                            <td>
                                <a class="btn btn-success" href="{{url('emailview', $appoints->id)}}">Send Mail</a>
                            </td>

                        </tr>
                        
                        @endforeach
                        
                    </tbody>

                </table>
            </div>
        
        
        </div>

    <!-- plugins:js -->
   @include('admin.script')
    <!-- End custom js for this page -->
    </div>
  </body>
</html>