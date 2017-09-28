@extends('home')

@section('title', '| View Profile')

@section('content')

<div class="col-md-8 col-md-offset-2">
    <div class="panel panel-info">
        <div class="panel-heading">
            <h3 class="panel-title">View User Profile</h3>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    
                    <form class="form-horizontal" method="post" action="{{-- {{url('/todo/'.$todo->id)}} --}}">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}

                    <div class="form-group">
                        <label for="name" class="col-md-3 control-label">Name</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="name" name="name" placeholder="name" value="{{$user->name}}">
                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email" class="col-md-3 control-label">Email Address</label>
                        <div class="col-md-9">
                            <input type="email" class="form-control" id="email" name="email" placeholder="email" value="{{$user->email}}">
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="phone" class="col-md-3 control-label">Phone Number</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="phone" name="phone" placeholder="phone" value="{{$user->phone}}">
                            @if ($errors->has('phone'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('phone') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <br>

                    <div class="form-group">
                        <div class="col-md-4 col-md-offset-4">
                          <button type="submit" class="btn btn-primary btn-block">Update</button>
                        </div>
                    </div>

                    </form>
                </div>
            </div>
        </div>    
    </div>
</div>

@endsection