@extends('admin.home')

@section('content')

<div class="container">
    <div class="row mt-5">
        <h1 class="text-center">Edit Client</h1>
    </div>   
        <form action="{{ url('client_update') }}" method="POST" role="form">
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            <input type="hidden" name="id" value="{{ $client->id }}" />
        <div class="row">
            <div class="col-12">
                <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" value="{{ $client->name}}"/>
                <label for="name">Surname</label>
                    <input type="text" class="form-control" name="surname" value="{{ $client->surname}}"/>
                <label for="name">Email</label>
                    <input type="text" class="form-control" name="email" value="{{ $client->email}}"/>
                <label for="name">Phone</label>
                    <input type="text" class="form-control" name="phone" value="{{ $client->phone}}"/>
            </div>

            <div class="text-center mb-4">    
                    <input type="submit" value="Edytuj" class="btn btn-primary mt-2" />
            </div>  
            </form>
        </div>
</div>

@endsection('content')