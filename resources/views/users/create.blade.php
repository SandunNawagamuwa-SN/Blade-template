@extends('layouts.app')

@section('content')
    <form method="POST" action="/users">
        @csrf
        <div class="form-group">
            <label for="exampleInputName">Name</label>
            <input type="text" class="form-control" id="exampleInputName" aria-describedby="NameHelp"
                placeholder="Bill gates" name="name">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail" placeholder="helloworld@gmail.com" name="email">
        </div>
        <div class="form-group">
            <label for="exampleInputAddress">Address</label>
            <input type="text" class="form-control" id="exampleInputAddress" placeholder="No: 1000, Colombo 10." name="address">
        </div>
        <div class="form-group">
            <label for="exampleInputPhone">Phone</label>
            <input type="text" class="form-control" id="exampleInputPhone" placeholder="+94 71 2345 678" name="phone_number">
        </div>
        <div class="form-group">
            <label for="exampleInputNic">NIC</label>
            <input type="text" class="form-control" id="exampleInputNic" placeholder="1995123456789" name="nic">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
