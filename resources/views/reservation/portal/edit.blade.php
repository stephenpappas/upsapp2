@extends('layouts.app')

@section('content')
    <div class="col-md-10 col-md-offset-1">  
        <div class="row">
            <div class="col-md-10">
                <h3 class="title">Edit Business Info: &nbsp <em>{{$portal->first()->accountname}}</em></h3>
            </div>
            <div class="col-md-2">
                <a type="button" href="{{route('portal.show', $portal->first()->id)}}" class="btn btn-primary">Return to Reservations</a>
            </div>
        </div>

    <hr>
        <div class="col-md-12">
            <div>
                <label for="accountname" class="form-control">Account Name</label>
                <pre>{{$portal->first()->accountname}}</pre>
            </div>

            <div>
                <label for="display_name" class="form-control">Address 1:</label>
                <pre>{{$portal->first()->address1}}</pre>
            </div>

            <div>
                <label for="description" class="form-control">Address 2:</label>
                <pre>{{$portal->first()->address2}}</pre>
            </div>
        </div>
    </div>
@endsection