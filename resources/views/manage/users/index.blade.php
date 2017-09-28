@extends ('layouts.manage')

@section('content')
    <div class="col-md-8">
        <div class="col-md-10">
            <h1 class="title">Manage Users</h1>
            &nbsp;
        </div>
        <div class="col-md-2">
            <a type="button" href="{{route('users.create')}}" class="btn btn-primary">Create User</a>
        </div>

    <hr>
        <div class="col-md-12">
        <div class="panel">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Date Created</th>
                        <th></th>
                    </tr>
                </thead>
                
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->created_at->toFormattedDateString()}}</td>
                        <td>
                            <a class="button" href="{{url('manage/users/' . $user->id)}}">Details</a> &nbsp
                            <a class="button" href="{{url('manage/users/' . $user->id . '/edit')}}">Edit</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>    
            </table>
        </div>
        </div>
        {{$users->links()}}
    </div>
@endsection