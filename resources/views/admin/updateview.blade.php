<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    @include('admin.admincss');

  </head>
  <body>
    <x-app-layout>
   
    </x-app-layout>

    <div class="container-scroller">

   @include('admin.sidebar')

   <div style="position: relative;top:60px;right:-150px" > 
   
    <form action="{{url('/update',$data->id)}}" method="post" enctype="multipart/form-data" ">
        @csrf
        <!--Add Food Item-->
        <div style="background-color: yellow">
        <div>
            <h2 style="color: white">Add Item In Food Menu</h2>
           </div>
        <div>
            <label>Title</label>
            <input style="color: black" type="text" name="title" value="{{$data->title}}" required>

        </div>
        <div>
            <label>Price</label>
            <input style="color: black" type="num" name="price" value="{{$data->price}}" required>
            
        </div>
       
        <div>
            <label>Description</label>
            <input style="color: black"  type="text" name="description" value="{{$data->description}}" required>
            
        </div>
        <div>
            <label>Old Image</label>
            <img height="200" width="200" src="/foodimage/{{$data->image}}">
            
        </div>
        <div>
            <label>New Image</label>
            <input  type="file" name="image"  required>
            
        </div>
        <div style=" ">
            <input style="color: black;padding-bottom:30px" type="submit" value="Save">
        
        </div>
    </div>

    </form>


</div>
    

   @include('admin.adminjs') 
</div>  
</body>

</html>
    
