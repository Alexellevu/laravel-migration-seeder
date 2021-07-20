<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        
       
    </head>
    <body>

        
    @foreach ($holidays as $holiday)
    
           <div class="card">
                <h2> {{$holiday->city}} </h2>
                <img src="{{$holiday->image_url}}" >
                <h3>{{$holiday->country}}</h3>
                <h4>{{$holiday->price}}</h4>
          
            </div>
    
    @endforeach
        

    </body>
</html>
