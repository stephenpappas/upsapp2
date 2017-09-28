@extends ('layouts.account')

@section('content')
    <div class="col-md-10 col-md-offset-1">
        <div class="col-md-10">
            <h1 class="title">Manage Accounts </h1>
            &nbsp;
        </div>
        <div class="col-md-2">
            <a type="button" href="{{-- {{route('account.create')}} --}}" class="btn btn-primary">Create New Account</a>
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
{{--                     @foreach ($accounts as $account)
                    <tr>
                        <td>{{$account->name}}</td>
                        <td>{{$account->address1}}</td>
                        <td>{{$account->address2}}</td>
                        <td><a class="button" href="{{route('account.edit', $account->id)}}">Details</a> &nbsp<a class="button" href="{{route('account.edit', $account->id)}}">Edit</a></td>
                    </tr>
                    @endforeach --}}
                </tbody>    
            </table>
        </div>
        </div>
{{--         {{$account->links()}} --}}
    </div>
@endsection
