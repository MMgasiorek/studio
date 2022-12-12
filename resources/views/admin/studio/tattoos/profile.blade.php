@extends('admin.home')

@section('content')




<div class="container">
    <div class="row">
        <div class="col-6">
            <h2 class="mb-3">General Information</h2>
        @foreach ($tattoo->visit as $item)
            <ul class="list-group">
                <li class="list-group-item">ID : {{$item->id}}</li>
                <li class="list-group-item">Name : {{$item->tattoo->name}}</li>
                <li class="list-group-item">Date : {{$item->date}}</li>
                <li class="list-group-item">Made : {{$item->employeer->surname}} , {{$item->employeer->name}}</li>
                <li class="list-group-item">Client : {{$item->client->name}} , {{$item->client->surname}}</li>
            </ul>
        @endforeach
        </div>
        <div class="col-6">
            <h2 class="mb-3">Work result</h2>
            <a href="#"><img src="{{asset('img/tattoos/').'/'.$tattoo->picture_number.'.png'}}" class="mx-auto d-block responsive"></a>
        </div>
    </div>
</div>


@endsection('content')