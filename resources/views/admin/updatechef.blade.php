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

      
      <form action="{{url('/updatefoodchef',$data->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
          <div>
              <label>Chef Name</label>
              <input style="color: rgb(0, 0, 0)" type="text" name="name" value="{{$data->name}}" >
          </div>
          <div>
            <label>Speciality</label>
            <input style="color: black" type="text" name="speciality" value="{{$data->speciality}}" >
        </div>
        <div>
            <label>Old Image</label>
            <img height="300" width="300" src="/chefimage/{{$data->image}}">
        </div>
        <div>
            <label>New Image</label>
            <input type="file" name="image" >
        </div>
        <div>
            
            <input style="color: black" type="submit" value="Save" >
        </div>
      </form>


    </div>

   @include('admin.adminjs') 
  </body>
</html>
    
