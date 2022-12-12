@extends('admin.home')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-2"></div>
            <div class="col-8">
            @include('admin.fullcalender')
            </div>
        <div class="col-2"></div>
    </div>
    <div class="row mt-4 mb-4">
        <div class="col-12">
        <h2 class="text-center mt-2 mb-2">Planning List</h2>
        <div class="table-responsive" style="height:350px;">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Employeer</th>
              <th scope="col">Client</th>
              <th scope="col">Date</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($events as $event)
            <tr>
              <td>{{$event->id}}</td>
              <td>{{$event->employeer->name}}, {{$event->employeer->surname}}</td>
              <td>{{$event->client->name}}, {{$event->client->surname}}</td>
              <td>{{$event->start}}</td>
              <td>
              <a href="{{ URL::to('/event_delete' , [$event->id] )}}"><button type="button" class="btn btn-danger btn-sm">Delete</button></a>
              <a href="{{ URL::to('/event_show' , [$event->id] )}}"><button type="button" class="btn btn-primary btn-sm">Details</button></a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
        </div>
    </div>

</div>

@endsection('content')



