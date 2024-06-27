<!DOCTYPE html>
<html>
<head> 

    @include('admin.css')

    <style type="text/css">
        .table_deg{

            border: 2px solid white;
            margin: auto;
            width: 100%;
            text-align: center;
            margin-top: 40px;
        }

        .th_deg{
            background-color: skyblue;
            padding: 15px;
        }

        tr{
            border: 3px solid white ;
        }

        td{
            padding: 10px;
        }
        
    </style>
  
</head>
  <body>
    
    @include('admin.header')
    

    @include('admin.sidebar')
    
    
    <!-- Sidebar Navigation end-->

    <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">

            <table class="table_deg">

                <tr>

                    <th class="th_deg">Room_id</th>
                    <th class="th_deg">Customer name</th>
                    <th class="th_deg">Email</th>
                    <th class="th_deg">Phone</th>
                    <th class="th_deg">Arrival date</th>
                    <th class="th_deg">Leaving date</th>
                    <th class="th_deg">Status</th>
                    <th class="th_deg">Room title</th>
                    <th class="th_deg">Price</th>
                    <th class="th_deg">Image</th>
                    <th class="th_deg">Delete</th>
                    <th class="th_deg">Status update</th>
                </tr> 
                    
                @foreach ($data as $data)
                    
                
                <tr>
                    <td>{{$data->room_id}}</td>
                    <td>{{$data->name}}</td>
                    <td>{{$data->email}}</td>
                    <td>{{$data->phone}}</td>
                    <td>{{$data->start_date}}</td>
                    <td>{{$data->end_date}}</td>
                    <td>
                    @if ($data->status == 'approved')

                    <span style="color: skyblue">Approved</span>

                    @elseif ($data->status == 'rejected')
                    <span style="color: red">Rejected</span>

                        @elseif ($data->status == 'waiting')
                        <span style="color: yellow">Waiting</span>
                    @endif

                    </td>
                    <td>{{$data->room->room_title}}</td>
                    <td>{{$data->room->price}}</td>
                    <td><img src="/room/{{$data->room->image}}" style="width: 200!important"></td>
                    <td>
                        <a  onclick="return confirm('Are you Sure to Delete This ?')" class="btn btn-danger" 
                        href="{{url('delete_booking' , $data->id)}}">Delete</a>
                    </td>
                    <td>
                       <span style="padding :10px"> <a href="{{url('approve_booking',$data->id)}}" 
                        class="btn btn-success">Approve</a></span>
                        <a href="{{url('reject_booking',$data->id)}}" class="btn btn-warning">Reject</a>
                    </td>
                </tr>
                @endforeach
            </table>


          </div>
        </div>
    </div>
    
    
    
    @include('admin.footer')
  </body>
</html>