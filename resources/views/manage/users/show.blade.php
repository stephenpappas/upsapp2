@extends('layouts.manage')

@section('content')
    <div class="col-md-8">
        <div class="col-md-10">
            <h1 class="title">{{$user->name}}</h1>
            <h4 class="subtitle">View User Details</h4>
        </div>

        <div class="col-md-2">
            <a type="button" href="{{url('manage/users/' . $user->id . '/edit')}}" class="btn btn-primary">Edit</a>
        </div>
        <div class="col-md-12">
            <div>
                <label for="name" class="form-control">Name</label>
                <pre>{{$user->name}}</pre>
            </div>

            <div>
                <label for="email" class="form-control">Email</label>
                <pre>{{$user->email}}</pre>
            </div>

            <div>
                <label for="phone" class="form-control">Phone</label>
                <pre>{{$user->phone}}</pre>
            </div>

            <div>
                <label for="role"  class="form-control">Roles</label>
                <ul>
                    {{$user->roles->count() == 0 ? 'This user has not been assigned any roles yet.': ''}}
                    @foreach ($user->roles as $role)
                    <li>{{$role->display_name}} <em>({{$role->description}})</em></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection