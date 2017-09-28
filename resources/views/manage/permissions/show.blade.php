@extends('layouts.manage')

@section('content')
    <div class="col-md-8">
        <div class="col-md-10">
            <h1 class="title">{{$permission->name}}</h1>
            <h4 class="subtitle">View Permission Details</h4>
        </div>

    <hr>
        <div class="col-md-2">
            <a type="button" href="{{route('permissions.edit', $permission->id)}}" class="btn btn-primary">Edit</a>
        </div>
        <div class="col-md-12">
            <div>
                <label for="name" class="form-control">Name</label>
                <pre>{{$permission->name}}</pre>
            </div>

            <div>
                <label for="display_name" class="form-control">Display Name</label>
                <pre>{{$permission->display_name}}</pre>
            </div>

            <div>
                <label for="description" class="form-control">Description</label>
                <pre>{{$permission->description}}</pre>
            </div>
        </div>
    </div>
@endsection