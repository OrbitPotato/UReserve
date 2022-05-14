@extends('layouts.main')

@section('content')
<h1>Students' Requests</h1>

<body>
   <table border ="1">
   <tr>
   <td>User Id</td>
   <td>Quantity</td>
   <td>Category</td>
   <td>Item</td>
   </tr>

   

@foreach ($data as $key2 => $equipment)
   <tr>
      <td>{{ $equipment->user->first_name}} {{ $equipment->user->last_name}}</td>
      <td>{{ $equipment->quantity }}</td>
      <td>{{ $equipment->category }}</td>
      <td>{{ $equipment->item }}</td>
   </tr>   

@endforeach
      
</table>

         @if(count($data) > 1)
            @foreach($data as $value)
               <div class="card p-3" >
                  <h3>{{$value->user_id}}</h3>
               </div>
             @endforeach
         @else
             <p>No posts found!</p>
         @endif

</body>

@endsection