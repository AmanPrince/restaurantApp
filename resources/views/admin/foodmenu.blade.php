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

    <div class="container" style="position: relative;top:60px;right:-150px" > 
        <div>
            <h1 style="color: yellow;font-size:30px;padding-bottom:10px">Add A Food Item</h1>
        </div>
    <form action="{{url('/uploadfood')}}" method="post" enctype="multipart/form-data" ">
        @csrf
        <!--Add Food Item-->
        <div>
            <label>Title</label>
            <input style="color: black" type="text" name="title" placeholder="Write a title" required>

        </div>
        <div>
            <label>Price</label>
            <input style="color: black" type="num" name="price" placeholder="Price" required>
            
        </div>
        <div>
            <label>Image</label>
            <input  type="file" name="image"  required>
            
        </div>
        <div>
            <label>Description</label>
            <input style="color: black"  type="text" name="description" placeholder="description" required>
            
        </div>
        <div>
            <input style="color: black" type="submit" value="Save">
        </div>
    </form>
     
       
        <!--Show , Delete And Edit Food Item  -->
    <div style="padding-top: 50px">
        <div>
            <h1 style="color: yellow;font-size:30px;padding-bottom:10px">Food Menu</h1>
        </div>
        <table bgcolor="black">
            
        <tr>
        <th style="padding: 30px">Food Name</th>
        <th style="padding: 30px">Price</th>
        <th style="padding: 30px">Description</th>
        <th style="padding: 30px">Image</th>
        <th style="padding: 30px">Action</th>
        <th style="padding: 30px">Action2</th>

        </tr>
        @foreach ($data as $data)
        <tr align="center">
            <td>{{$data->title}}</td>
            <td>{{$data->price}} Taka </td>
            <td>{{$data->description}}</td>
            <td> <img height="200" width="200"
                 src="/foodimage/{{$data->image}}"> 
            </td>
            <td><a href="{{url('/deletemenu',$data->id)}}">Delete</a></td>
            <td><a href="{{url('/updateview',$data->id)}}">Update</a></td>
        </tr>
        @endforeach
      </table>
     
    </div>

</div> 


   

  
</div>
@include('admin.adminjs') 
  </body>
</html>
    
