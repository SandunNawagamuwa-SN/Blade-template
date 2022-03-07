@extends('layouts.app')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">NIC</th>
                <th scope="col">Phone</th>
                <th scope="col">Address</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($users as $user)
                <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->nic}}</td>
                    <td>{{$user->phone}}</td>
                    <td>{{$user->address}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                        <a href="/users/{{ $user->id }}/edit"><button type="button" class="btn btn-danger">EDIT</button></a>
                        <form method="POST" action="/users/{{$user->id}}" style="display: inline">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-primary">DELETE</button>
                        </form>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
