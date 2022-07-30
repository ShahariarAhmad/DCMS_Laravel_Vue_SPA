<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Chamber;
use App\Models\Transaction;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class appointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chamber = Chamber::all(['id', 'name']);
        return response($chamber, 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
// I don't want to create another function or route so using this one 

$data = User::join('transactions AS t','t.user_id','users.id')

->join('handlers AS h','h.user_id','t.handler_id')
->join('users AS u','u.id','h.user_id')
->join('appointments AS a','a.transaction_id','t.id')
->whereDate('desired_serial_date', Carbon::today()->toDateString())

->get([ 'users.f_name' , 'u.f_name AS handler','trix_id','amount','sent_to','sent_from' ,'payment_status','payment_method','desired_serial_date','given_serial_no' ]);

return response($data,200);

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

        $app = Appointment::whereDate('desired_serial_date', '=',$request->desired_date)

        ->orderBy('given_serial_no', 'DESC')
        ->limit(1)->get('*');


    //   return response(count($app));
        // return response([
        //     0 => $app[0]->given_serial_no,
        //     1 => $app[0]->given_serial_no
        // ]);
        if (count($app) == 0) {
            $serial = 1;
        } 

        if (count($app) !== 0) {
            
                $serial = $app[0]->given_serial_no + 1;
    # code...
        }
       


        DB::transaction(function () use ($request, $serial) {
            $transaction = Transaction::create([


                'trix_id' => $request->trix_id,
                'amount' => $request->amount,
                'sent_to' => $request->sent_to,
                'sent_from' => $request->sent_from,
                'user_id' => 1,

                'payment_status' => 'pending',
                'payment_method' => $request->payment_method,


            ]);

            Appointment::create([
                'desired_serial_date' =>     $request->desired_date,
                'given_serial_no' =>      $serial,
                'transaction_id' =>     $transaction->id,
                'chamber_id' =>     $request->chamber_id,

            ]);
        });

        return response($serial);
        return response('Sucess');
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
        //
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
}
