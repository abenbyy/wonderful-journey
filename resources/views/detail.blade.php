@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <img class="card-img-top" src="{{ asset('/storage/images/'.$article->image) }}" alt="">
        <div class="card-body">
          <h2 class="card-title">{{$article->title}}</h2>
          <p class="card-text" style="font-size: 13pt;">{{$article->description}}</p>
        </div>
    </div>
</div>
@endsection
