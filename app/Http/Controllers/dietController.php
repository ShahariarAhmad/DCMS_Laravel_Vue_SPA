<?php

namespace App\Http\Controllers;

use App\Models\Diet;
use App\Models\Diet_request;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class dietController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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


    public function drafts(){
        $draft = Diet::where('draft',0)->get('id');
        return response($draft); 
    }





    public function diet_request(){
        
        $request = DB::table('diet_requests')
        ->join('transactions','transaction_id','transactions.id')
        ->join('users','user_id','users.id')
        ->get(['trix_id','age','height','f_name','l_name','amount','sent_from','sent_to','diet_requests.created_at','avatar']);

        return response($request); 
    }

    

    public function diet_records(){
        
        $request = DB::table('users')
        ->join('transactions','transactions.user_id','users.id')
      
        ->join('handlers','handlers.user_id', 'transactions.user_id')
        ->join('users AS u','u.id', 'handlers.user_id')
        ->join('diet_records','diet_records.transaction_id','transactions.id')
        ->where('diet_records.user_id',2)
        ->get(['users.f_name as name', 'u.f_name as handler', 'trix_id', 'amount', 'payment_method', 'payment_status','transactions.created_at']);

        return response($request); 
    }
}


// ->get(['users.f_name as name', 'u.f_name as handler', 'trix_id', 'amount', 'payment_method', 'payment_status', 'cause'])->toArray();