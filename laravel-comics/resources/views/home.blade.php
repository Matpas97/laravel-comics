@extends('layouts._main')

@section('title')
    DC Comics HomePage
@endsection

@section('main')
<div class="bg-black">
    <h2>
        Current Series
    </h2>
    <div class="container">
     <div class="card-container">
        @foreach($comics as $comic)
        @include('partials._comic-card')
         <div>
            {{ $comic['title']}}
         </div>
        @endforeach

      </div>
      
    </div>
</div>

<div class="bg-blue"></div>
@endsection