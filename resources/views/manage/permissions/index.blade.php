@extends ('layouts.manage')

@section('content')
    <div class="col-md-8">
        <div class="col-md-10">
            <h1 class="title">Manage Permissions</h1>
            &nbsp;
        </div>
        <div class="col-md-2">
            <a type="button" href="{{route('permissions.create')}}" class="btn btn-primary">Create Permission</a>
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
                    @foreach ($permissions as $permission)
                    <tr>
                        <td>{{$permission->name}}</td>
                        <td>{{$permission->display_name}}</td>
                        <td>{{$permission->description}}</td>
                        <td><a class="button" href="{{route('permissions.show', $permission->id)}}">Details</a> &nbsp<a class="button" href="{{route('permissions.edit', $permission->id)}}">Edit</a></td>
                    </tr>
                    @endforeach
                </tbody>    
            </table>
        </div>
        </div>
{{--         {{$permissions->links()}} --}}
    </div>
@endsection