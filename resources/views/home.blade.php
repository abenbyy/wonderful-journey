@extends('layouts.app')

@section('content')
<div class="container">
    @if (Auth::user())
        Welcome, {{Auth::user()->name}}
    @endif
    <div class="row">
        @foreach ($articles as $art)
        <div class="col-md-4" style="margin: 10px 0">
            <div class="card" style="">
                <img class="card-img-top" style="object-fit:cover;width:100%; height:232px" src="{{ asset("/storage/images/$art->image") }}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">{{$art->title}}</h5>
                  <span class="card-subtitle mb-2 text-muted">
                    <a href="/categories/{{$art->category->name}}">{{$art->category->name}}</a>
                  </span>
                  <p class="card-text">{{$art->description}}</p>
                  <a href="/articles/view/{{$art->id}}" class="btn btn-primary">View Details</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
