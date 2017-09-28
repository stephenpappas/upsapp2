@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="row">
                <div class="col-md-9">
                    <h1>Reservation Dashboard</h1>
                </div>
                <div class="col-md-3">
                    <h4>
                        <?php
                        echo "Today is: " . "&nbsp" . date("m/d/Y") . "<br>";
                        ?>
                    </h4>
                </div>
            </div>
            <hr>
            <div class="row">   
                <h3>Scheduled Reservations</h3>
            </div>
            <div class="row">
                <form method="PUT" action="url('schedules')">
                    {{csrf_field()}}
                    {{ method_field('PATCH') }}
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                <div class="col-md-12">
                    <div class="col-md-3">    
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <?php 
                                    echo $c->format('l');
                                    echo ", ";
                                    echo $c->format('M d');
                                ?>

                            </div>
                            <div class="panel-body">
                                @foreach ($accounts as $account)
                                    <ul> {{ $account->accountname }} 
                                        {{-- @foreach ($account->schedules as $schedule)
                                        <li>
                                            {{ $schedule->reservation }} 
                                            <a href="#" value="{{ $schedule->account_id }}"> cancel </a>
                                        </li>
                                        @endforeach --}}
                                    </ul>
                                @endforeach
                            </div>
                        </form>
                        </div>
                    </div>

                    <div class="col-md-3">    
                        <div class="panel panel-default">
                            <div class="panel-heading"> 
                                <?php 
                                    echo $c1->format('l');
                                    echo ", ";
                                    echo $c1->format('M d');
                                ?>
                            </div>
                            <div class="panel-body">
                                {{-- @foreach ($accounts as $account)
                                    <ul> {{ $account->accountname }} 
                                        @foreach ($account->schedules as $schedule)
                                        <li>
                                            {{ $schedule->reservation }} 
                                            <a href="{{url('schedules')."/"."$schedule->id"}}" value="{{ $schedule->id }}"> cancel </a>
                                        </li>
                                        @endforeach
                                    </ul>
                                @endforeach --}}
                            </div>
                        </form>
                        </div>
                    </div>

                    <div class="col-md-3">    
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <?php 
                                    echo $c2->format('l');
                                    echo ", ";
                                    echo $c2->format('M d');
                                ?>
                            </div>
                            <div class="panel-body">
                                {{-- @foreach ($accounts as $account)
                                    <ul> {{ $account->accountname }} 
                                        @foreach ($account->schedules as $schedule)
                                        <li>
                                            {{ $schedule->reservation }} 
                                            <a href="{{url('schedules')."/"."$schedule->id"}}" value="{{ $schedule->id }}"> cancel </a>
                                        </li>
                                        @endforeach
                                    </ul>
                                @endforeach --}}
                            </div>
                        </form>
                        </div>
                    </div>

                    <div class="col-md-3">    
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <?php 
                                    echo $c3->format('l');
                                    echo ", ";
                                    echo $c3->format('M d');
                                ?>
                            </div>
                            <div class="panel-body">
                                {{-- @foreach ($accounts as $account)
                                    <ul> {{ $account->accountname }} 
                                        @foreach ($account->schedules as $schedule)
                                        <li>
                                            {{ $schedule->reservation }} 
                                            <a href="{{url('schedules')."/"."$schedule->id"}}" value="{{ $schedule->id }}"> cancel </a>
                                        </li>
                                        @endforeach
                                    </ul>
                                @endforeach --}}
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>

        <hr>

            <div class="row">
                <h3>Open Reservations</h3>
                <div class="panel panel-default">
                    <div class="panel-heading">    
                        <form method="POST" action="{{-- /schedule/{$id}/edit --}}">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                    Available times
                    </div>
                    <div class="panel-body">
                        {{-- @foreach ($opens as $open)
                            <ul>
                                <li> 
                                    {{ $open }}                    
                                </li>
                            </ul>
                        @endforeach --}}
                    </div>
                </div>
                </form>
            </div>
            </div>
            </div>
        </div>
    </div>
</div>

@endsection
