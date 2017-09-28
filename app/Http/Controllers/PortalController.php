<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Schedule;
use App\Account;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\User;
use Auth;

class PortalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $user = Auth::user();
        // $account = Account::first();
        // $schedules = Schedule::all();
        // $opens = App\Schedule::where('scheduled', '=', 0)
        $reservation = Schedule::all();
        // // $opens = Schedule::where('account_alpha', "=", null)->pluck('reservation');
        $c = Carbon::today();
        $c1 = Carbon::tomorrow();
        $c2 = new Carbon('+2 days');
        $c3 = new Carbon ('+3 days');

        // $reservation1hots = User::with('schedule')->where('reservation', '=', $c)->where('processdate', '=', $c);
        // $reservation1colds = $reservation->where('reservation', '=', $c)->where('processdate', '=', $c1);

        // return view('reservation/portal/index', compact('c', 'c1', 'c2', 'c3', 'reservation1hots', 'reservation1colds', 'schedules'))->withReservation1hots($reservation1hots);

        // return view('reservation/portal/index', compact('accounts', 'schedules', 'opens', 'c', 'c1', 'c2', 'c3'));
        // 
        $id = Auth::id();
        $account_id = DB::table('account_user')->select('account_id')->where('user_id', '=', $id);
        $query = DB::table('accounts')->select('accountalpha')->where($id, "=", $account_id);
       dd($account_id);
        // $accountalpha = $query->get();



        // return view('reservation.portal.index', ['accountalpha' => $accountalpha]);
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
        // 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $portal = Account::findOrFail($id);
      return view('reservation.portal.edit')->withPortal($portal);
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
      $this->validate($request, [
        'accountname' => 'required|max:255',
        'address1' => 'sometimes|max:255',
        'address2' => 'sometimes|max:255'
      ]);
      $portal = Account::findOrFail($id);
      $portal->accountname = $request->accountname;
      $portal->address1 = $request->address1;
      $portal->address2 = $request->address2;
      $portal->save();

      Session::flash('success', 'Updated the '. $portal->accountname . ' business profile.');
      return redirect()->route('portal.show', $id);
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
}
