<!DOCTYPE html>
<html lang="en">
  <head>

    @include('admin.admincss');

  </head>
  <body>
    <x-app-layout>
   
    </x-app-layout>

    <div class="container-scroller">

   @include('admin.sidebar')

      
     <form action="{{url('/uploadchef')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <h2 style="text-align: center;color:yellow;font-size:30px;padding-bottom:10px">Upload A Chef</h2>
        </div>
       <div>
         <label>Name</label>
         <input style="color: black" type="text" name="name" placeholder="Enter Chef Name" required>      
       </div>   
       <div>
        <label>Speciality</label>
        <input style="color: black" type="text" name="speciality" placeholder="Enter Chef Speciality" required>      
      </div>  
      <div>
       <input type="file" name="image">      
    </div>  
    <div>
        <input style="color: black" type="submit" value="Save">
    </div>
    </form>  
    <div >
        <h3 style="text-align: center ;color:yellow;font-size:30px;padding-bottom:10px">Chef List</h3>
    <table bgcolor="black">
        <tr align="center">
            <th style="padding: 20px; ">Name</th>
            <th style="padding: 20px; ">Speciality</th>
            <th style="padding: 20px; ">Image</th>
            <th style="padding: 20px; ">Action</th>
            <th style="padding: 20px; ">Action2</th>
        </tr>
        @foreach ($data as $data )
            
       
        <tr align="center">
            <td style="padding: 10px;">{{$data->name}}</td>
            <td style="padding: 10px;">{{$data->speciality}}</td>
            <td style="padding: 10px;"><img height="100" width="100" src="/chefimage/{{$data->image}}"></td>
            <td style="padding: 10px;"><a href="{{url('/updatechef',$data->id)}}">Update</a></td>
            <td style="padding: 10px;"><a href="{{url('/deletechef',$data->id)}}">Delete</a></td>
        </tr>

        @endforeach

    </table>
</div>

</div>

   @include('admin.adminjs') 

  </body>
</html>
    
