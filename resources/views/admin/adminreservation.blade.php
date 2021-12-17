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

     <div style="position: relative; top:70px; Righr:-150">
      <h1 style="color: yellow;padding-bottom:10px ;font-size:30px;">Reservations:</h1>
      <table border="5px"  bgcolor="black">
       <tr>
          <th style="padding: 30px">Name</th>  
          <th style="padding: 30px">Email</th> 
          <th style="padding: 30px">Phone</th> 
          <th style="padding: 30px">guest</th> 
          <th style="padding: 30px">Date</th> 
          <th style="padding: 30px">Time</th> 
          <th style="padding: 30px">Message</th>   
       </tr>  
       @foreach ($data as $data ) 
       <tr align="center">
          
               
          
        <td style="padding: 10px">{{$data->name}}</td>  
        <td style="padding: 10px">{{$data->email}}</td> 
        <td style="padding: 10px">{{$data->phone}}</td> 
        <td style="padding: 10px">{{$data->guest}}</td> 
        <td style="padding: 10px">{{$data->date}}</td> 
        <td style="padding: 10px">{{$data->time}}</td> 
        <td style="padding: 10px">{{$data->message}}</td>   
      
     </tr>  
     @endforeach    
    </table>     
    </div>    


  
    

   @include('admin.adminjs') 
</div>

  </body>
</html>
    
