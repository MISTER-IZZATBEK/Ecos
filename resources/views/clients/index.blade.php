@extends('clients.layout')
@section('content')
<table class="table border">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">NAME</th>
        <th scope="col">FAMILY</th>
        <th scope="col">PHONE</th>
    </tr>
    </thead>
    <tbody>
    @foreach($clients as $client)
    <tr>
        <th scope="row">{{$client->id}}</th>
        <td>{{$client->name}}</td>
        <td>{{$client->family}}</td>
        <td>{{$client->phone}}</td>

    </tr>
    @endforeach

    </tbody>
</table>
@endsection
