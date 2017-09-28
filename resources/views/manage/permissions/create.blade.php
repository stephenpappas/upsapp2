@extends ('layouts.manage')

@section('content')
    <div class="col-md-8">
        <div class="col-md-10">
            <h1 class="title">Create Permissions</h1>
        </div>

    <hr>
        <div class="col-md-12">
            <form action="{{route('permissions.store')}}" method="POST">
                {{ csrf_field() }}

{{--                 <label class="custom-control custom-radio">
                  <input id="radio1" name="radio" type="radio" class="custom-control-input">
                  <span class="custom-control-indicator"></span>
                  <span class="custom-control-description">Basic Permissions</span>
                </label>
                &nbsp;
                <label class="custom-control custom-radio">
                  <input id="radio2" name="radio" type="radio" class="custom-control-input">
                  <span class="custom-control-indicator"></span>
                  <span class="custom-control-description">CRUD Permissions</span>
                </label>
                <hr> --}}

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
                        <input id="display_name" type="text" class="form-control" name="display_name" value="{{ old('display_name') }}" required>

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
                        <input id="description" type="text" class="form-control" name="description" value="{{ old('description') }}" required>

                        @if ($errors->has('description'))
                            <span class="help-block">
                                <strong>{{ $errors->first('description') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            Create
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection