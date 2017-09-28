@extends('layouts.manage')

@section('content')
<div class="col-md-9">
    <div class="row">
        <div class="col-md-12">
            <h1 class="title">Admin Dashboard</h1>
        </div>
    </div>


    <div class="row">
        <div class="col-md-5">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">Reservations Adds</h4>
                </div>
                <div class="panel-body">
                    <table class="table">
                        <thead>
                            <tr>    
                                <th>Date</th>
                                <th>Booked</th>
                                <th>Available</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>10/2/2017</td>
                                <td>44</td>
                                <td>21</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-md-5">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">Upload Schedules</h4>
                </div>
                <div class="panel-body">
                    <form>
                        <label for="input-b1">Select File</label>
                        <input id="input-b1" name="input-b1" type="file" class="file">                
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-5">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">Site Analytics</h4>
                </div>
                <div class="panel-body">
                    Site analytic data
                </div>
            </div>
        </div>

        <div class="col-md-5">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">Download Schedules</h4>
                </div>
                <div class="panel-body">
                    <form>
                        <label for="input-b1">Select File</label>
                        <input id="input-b1" name="input-b1" type="file" class="file">                
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection