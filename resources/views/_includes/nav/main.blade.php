<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            @if (Auth::guest())
                <a class="navbar-brand" href="{{url('/')}}">{{ config('app.name', 'Laravel') }}</a> 
            @elseif (Auth::user()->hasRole('superadministrator'))
                <a class="navbar-brand" href="{{route('manage.dashboard') }}">{{ config('app.name', 'Laravel') }}</a>            
            @elseif (Auth::user()->hasRole('administrator'))
                <a class="navbar-brand" href="{{route('account.index') }}">{{ config('app.name', 'Laravel') }}</a>
            @elseif (Auth::user()->hasRole('dispatch'))
                <a class="navbar-brand" href="#">{{ config('app.name', 'Laravel') }}</a>
            @else
                <a class="navbar-brand" href="{{route('portal.index')}}">{{ config('app.name', 'Laravel') }}</a>
            @endif

            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                &nbsp;
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ route('login') }}">Login</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                @if (Auth::user()->hasRole('superadministrator'))
                                <a href="{{route('manage.dashboard') }}">Admin Dashboard</a>
                                <a href="{{route('account.index') }}">Accounts Dashboard</a>
                                <a href="#">Dispatch Dashboard</a>
{{--                                 <a href="{{route('profile.dashboard') }}">Update Profile</a> --}}

                            </li>    
                            <li role="separator" class="divider"></li>

                            @elseif (Auth::user()->hasRole('administrator'))
                                <a href="{{route('account.index') }}">Accounts Dashboard</a>
{{--                                 <a href="{{route('profile.dashboard') }}">Update Profile</a> --}}
                            </li>    
                            <li role="separator" class="divider"></li>

                            @elseif (Auth::user()->hasRole('dispatch'))
                                <a href="#">Dispatch Dashboard</a>
{{--                                 <a href="{{route('profile.dashboard') }}">Update Profile</a> --}}

                            </li>    
                            <li role="separator" class="divider"></li>                                

                            @else 
                                {{-- <a href="{{route('profile.dashboard') }}">Update Profile</a> --}}
                                {{-- <a href="{{route('portal.show')}}">Edit Business Info</a> --}}
                            {{-- <li role="separator" class="divider"></li> --}}

                            @endif
                            <li>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
