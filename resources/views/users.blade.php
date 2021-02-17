@extends('layouts.app')

@section('content')
<div class="container">
    <div>
        <table class="table table-striped">
            <thead>
                <tr>
                    
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th width="5%" scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>
                            <form method="POST" action="users/delete/{{$user->id}}">
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
