<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Account;
use App\Schedule;
use App\User;
use Carbon\Carbon;

class SchedulesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $accounts = Account::all();
        $schedules = Schedule::all();
        $opens = Schedule::where('account_alpha', "=", null)->pluck('reservation');
        // $cancellations = Schedule::all()->pluck('id');

        // return view('home', compact('cancellations'));

        $c = Carbon::today();
        $c1 = Carbon::tomorrow();
        $c2 = new Carbon('+2 days');
        $c3 = new Carbon ('+3 days');

        $cutoff = Carbon::createFromTime(12, 0, 0);

        return view('home', compact('accounts', 'cancellations', 'schedules', 'opens', 'c', 'c1', 'c2', 'c3', 'cutoff'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $schedule = Schedule::find($id);
        $todayScheduleHot = Schedule::find($id);
        // $todayScheduleCold 
        // $tomorrowScheduleHot
        // $tomorrowScheduleCold
        // $overmorrowScheduleHot
        // $overmorrowScheduleCold
        $c = Carbon::today();
        $c1 = new Carbon('+1 Day');
        $c2 = new Carbon('+2 Days');
        $c3 = new Carbon('+3 Days');        
        return view('home')->compact($c, $c1, $c2, $c3);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $schedule = Schedule::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function cancelReservation($id)
    {
        $id->account_id = null;
        $id->save();

        // var_dump($schedule);

        // return redirect('/home');
    }

    // public function addReservation(Schedule $schedule)
    // {
    //     $schedule = Schedule::where('id','=','account_id');
    //     $newschedule = User::get()->account_id;
    //     $schedule->account_id = $newschedule;

        // var_dump($addreservations);

        //get account_id
        //select schedule_id
        //update schedule_id record with account_id
        //return home dashboard
    // }
}
