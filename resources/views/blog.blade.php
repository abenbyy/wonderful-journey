@extends('layouts.app')

@section('content')
<div class="container">
    @if (Auth::user() && Auth::user()->role === 'user')
        <h3>{{Auth::user()->name}}'s Blog Posts</h3>
        <a href="/articles/create" class="btn btn-primary" style="margin: 10px 0;">Create Blog</a>
    @endif
    @if (Auth::user() && Auth::user()->role === 'admin')
        <h3>All Users Posts</h3>
    @endif
    
    <div>
        <table class="table table-striped">
            <thead>
                <tr>
                    
                    <th scope="col">Title</th>
                    <th width="5%" scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($articles as $art)
                    <tr>
                        <td style="font-size: 13pt">
                            <a href="/articles/view/{{$art->id}}">{{$art->title}}</a>
                        </td>
                        <td>
                            <form method="POST" action="/articles/delete/{{$art->id}}">
                                @csrf
                                <button class="btn btn-danger" type="submit"><i class="fas fa-trash"></i></button>	
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
