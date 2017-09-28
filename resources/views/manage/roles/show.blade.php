@extends ('layouts.manage')

@section('content')
    <div class="col-md-8">
        <div class="col-md-10">
            <h3 class="title">Role Details: <em>{{$role->name}} </em></h3>
        </div>

        <div class="col-md-2">
            <a type="button" href="{{route('roles.edit', $role->id)}}" class="btn btn-primary">Edit</a>
        </div>

        <div class="col-md-12">
            <div class="panel">
                <div class="panel-header">
                    <h3>&nbsp;&nbsp;Permissions:</h3>
                </div>
                <hr>
                <div class="panel-body">

                    <div class="form-check">
                        <ul class="list-unstyled" >    
                            @foreach ($role->permissions as $r)
                                <li>

                                   {{$r->display_name}} &nbsp; <em>({{$r->description}})</em>
                                </li>    
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div> {{-- End of Panel --}}
        </div>
    </div>
@endsection
