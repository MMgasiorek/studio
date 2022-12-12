@extends('admin.home')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-9 mt-3 mb-4">
            <h3>Content Management</h3>
        </div>
        <div class="col-3 mt-3 mb-4">
            <a href="{{ URL::to('/content_add')}}"><button type="button" class="btn btn-success">Add new</button></a>
        </div>
        @foreach ($content_areas as $content_area)
            <div class="col-6 text-center">
                    <div class="card">
                        <div class="card-header ">{{Str::upper($content_area->name)}}</div>
                            <div class="card-body">
                <a href="{{ URL::to('/content_show' , [$content_area->id] )}}"><button type="button" class="btn btn-warning">Manage</button></a>
                            </div>
                    </div>
            </div>
        @endforeach
    </div>
</div>

@endsection('content')