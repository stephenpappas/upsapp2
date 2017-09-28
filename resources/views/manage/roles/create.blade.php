@extends ('layouts.manage')

@section('content')
    <div class="col-md-8">
        <div class="col-md-10">
            <h3 class="title">Create New Role</h3>
        </div>
        <form action="{{route('roles.store')}}" method="POST">
          {{ csrf_field() }}     

                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="name" class="col-md-4 control-label">Name</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('display_name') ? ' has-error' : '' }}">
                    <label for="display_name" class="col-md-4 control-label">Display Name</label>

                    <div class="col-md-6">
                        <input id="display_name" type="text" class="form-control" name="display_name" value="{{ old('display_name') }}" required autofocus>

                        @if ($errors->has('display_name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('display_name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                    <label for="description" class="col-md-4 control-label">Description</label>

                    <div class="col-md-6">
                        <input id="description" type="text" class="form-control" name="description" value="{{ old('description') }}" required autofocus>

                        @if ($errors->has('description'))
                            <span class="help-block">
                                <strong>{{ $errors->first('description') }}</strong>
                            </span>
                        @endif
                    </div>
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
                                    @foreach ($permissions as $permission)
                                        <li>
                                            <input id="checkbox" type="checkbox" v-model="permissionsSelected" :custom-value="{{$permission->id}}"> 
                                            <label for="checkbox"> {{$permission->display_name}} &nbsp; <em>({{$permission->description}})</em></label>
                                        </li>    
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div> {{-- End of Panel --}}
            <button class="btn btn-primary">Create</button>
        </form>
        </div>
    </div>
@endsection