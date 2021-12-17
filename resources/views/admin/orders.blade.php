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

 <div class="container">
  <div>
    <h1 style="color: yellow;font-size:30px;padding-bottom:20px">Customers Orders</h1>
  </div> 

      <form action="{{url('/search')}}" method="get">
          @csrf
          <input type="text" name="search" style="color: blue;">
          <input type="submit" value="Search" class="btn btn-success">
      </form>

 <div style="padding-top: 20px">
   <table bgcolor="black">
     
    <tr align="center">
           <th style="padding: 30px">Name</th>
           <th style="padding: 30px">Phone</th>
           <th style="padding: 30px">Address</th>
           <th style="padding: 30px">Food Name</th>
           <th style="padding: 30px">Price</th>
           <th style="padding: 30px">Quantity</th>
           <th style="padding: 30px">Total Price</th>
       </tr>
       @foreach ($data as $data)
           
      
       <tr align="center" style="background-color: black; padding-bottom:20px">
           <td>{{$data->name}}</td>
           <td style="padding-right: 20px">{{$data->phone}}</td>
           <td>{{$data->address}}</td>
           <td>{{$data->foodname}}</td>
           <td>{{$data->price}} Taka </td>
           <td>{{$data->quantity}}</td>
           <td>{{$data->price *$data->quantity}} Taka</td>
       </tr>
       @endforeach
   </table>

  </div>
</div>
    </div>
  

   @include('admin.adminjs') 
  </body>
</html>
    
