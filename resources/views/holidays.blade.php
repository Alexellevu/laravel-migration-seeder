@extends ('layout.app')

@section('title', 'Home Page')

@section ('content')

@foreach ($holidays as $holiday)
    
    <div class="card">
         <h2> {{$holiday->city}} </h2>
         <h3>{{$holiday->country}}</h3>
         <img src="{{$holiday->image_url}}" >
        <h4>Hotel: {{$holiday->hotel}}</h4>
         <h4>price: {{$holiday->price}} $</h4>
   
     </div>

@endforeach

@endsection