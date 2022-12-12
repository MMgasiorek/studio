@extends('admin.home')

@section('content')

<div class="container">
    <div class="row">
        <h2 class="text-center mt-2 mb-2">Section {{$area->name}}</h2>
        <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Name</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($contents as $content)
            <tr>
              <td>{{$content->id}}</td>
              <td>{{$content->title}}</td>
              <td>
              <a href="{{ URL::to('/content_delete' , [$content->id] )}}"><button type="button" class="btn btn-danger btn-sm">Delete</button></a>
              <a href="{{ URL::to('/content_edit' , [$content->id] )}}"><button type="button" class="btn btn-info btn-sm">Edit</button></a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
</div>

@endsection('content')