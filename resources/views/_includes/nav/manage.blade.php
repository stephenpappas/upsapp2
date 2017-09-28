<div class="col-md-2 col-md-offset-1">
    
    <div class="panel panel-default">
        <ul class="nav nav-pills nav-stacked">
            </br>
            <h4 class="menu-label">
                &nbsp General
            </h4>
            <li class="menu-list">
                <a href="{{route('manage.dashboard')}}">Dashboard</a>
            </li>
            <hr>
            <h4 class="menu-label">
                &nbsp Administration
            </h4>
            <li><a href="{{url('manage/users/')}}">Manage Users</a></li>
            <li><a href="{{route('permissions.index')}}">Manage Permissions</a></li>
            <li><a href="{{route('roles.index')}}">Manage Roles</a></li>
        </ul>
    </div>
</div>