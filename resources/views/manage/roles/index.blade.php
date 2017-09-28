@extends ('layouts.manage')

@section('content')
    <div class="col-md-8">
        <div class="col-md-10">
            <h1 class="title">Manage Roles</h1>
            &nbsp;
        </div>
        <div class="col-md-2">
            <a type="button" href="{{route('roles.create')}}" class="btn btn-primary">Create Role</a>
        </div>

    <hr>
        <div class="col-md-12">
        <div class="panel">
            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Display Name</th>
                        <th>Description</th>
                        <th></th>
                    </tr>
                </thead>
                
                <tbody>
                    @foreach ($roles as $role)
                    <tr>
                        <td>{{$role->name}}</td>
                        <td>{{$role->display_name}}</td>
                        <td>{{$role->description}}</td>
                        <td>
                            <a class="button" href="{{route('roles.show', $role->id)}}">Details</a> &nbsp;
                            <a class="button" href="{{route('roles.edit', $role->id)}}">Edit</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>    
            </table>
        </div>
        </div>
{{--         {{$roles->links()}} --}}
    </div>
@endsection