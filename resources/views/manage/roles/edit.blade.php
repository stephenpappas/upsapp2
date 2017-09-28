@extends ('layouts.manage')

@section('content')
    <div class="col-md-8">
        <div class="col-md-10">
            <h3 class="title">Edit  <em>{{$role->name}}</em>&nbsp Role Details</h3>
        </div>


        <form action="{{route('roles.update', $role->id)}}" method="POST">
          {{ csrf_field() }}
          {{ method_field('PUT') }}        

        <div class="col-md-12">
            <div class="panel">
                <div class="panel-header">
                    <h3>&nbsp;&nbsp;Permissions:</h3>
                </div>
                <div class="panel-body">

                    <div class="form-check">
                        <ul class="list-unstyled" >    
                            @foreach ($role->permissions as $r)
                                <li>
                                    <input id="checkbox" type="checkbox" v-model="permissionsSelected" :custom-value="{{$r->id}}"> 
                                    <label for="checkbox"> {{$r->display_name}} &nbsp; <em>({{$r->description}})</em></label>
                                </li>    
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div> {{-- End of Panel --}}
            <button class="btn btn-primary">Save Changes to Role</button>
        </div>
    </div>
@endsection

@section('scripts')
<script>

    var app = new Vue({
        el: '#app',
        data: {
            permissionsSelected: {$role->permissions->pluck('id')}
        }
    });
</script>

@endsection